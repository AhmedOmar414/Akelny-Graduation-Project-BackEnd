<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
//        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
//        category=$restaurant->categories->sub_categories->products;
//
//        $category = Category::find($categoryId);
//        $products = collect();
//
//        foreach ($category->subcategories as $subcategory) {
//            $products = $products->merge($subcategory->products);
//        }
        $products = DB::table('categories')
            ->join('subcategories', 'categories.id', '=', 'subcategories.category_id')
            ->join('products', 'subcategories.id', '=', 'products.sub_category_id')
            ->select('products.*')
            ->get();
        return view('restaurant.dashboard.pages.product.index',compact("products"));

    }

    public function create()
    {
        $restaurant_id=Restaurant::where('user_id',Auth::user()->id)->first();
        $sub_categories = DB::table('categories')->where('restaurant_id',$restaurant_id)
            ->join('subcategories', 'categories.id', '=', 'subcategories.category_id')
            ->join('products', 'subcategories.id', '=', 'products.sub_category_id')
            ->select('subcategories.*')
            ->get();

        return view('restaurant.dashboard.pages.product.create',compact('sub_categories'));

    }


    public function store(Request $request)
    {
       $data= $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'price' => 'required|numeric|min:0.01',
            'description' => 'required|string',
            'quantity' => 'required|numeric',
            'sub_category_id' => 'required',
            'status' => 'required',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/products/'), $image);
            $data['photo']  = $image;
        }
        $product=Product::create($data);
        if(!$product->save()){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product.index')->with('success', 'Product Created Successfully!');
        }
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        //     $product=Product::find($id)->sub_categories->category;

        $product=Product::find($id)->first();
        $restaurantId=Auth::user()->id;
        $sub_categories= Subcategory::whereHas('category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();

        return view('restaurant.dashboard.pages.product.edit',compact('product','sub_categories'));

    }


    public function update(Request $request, $id)
    {

        $data =$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' => 'required|string|max:100',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'quantity' => 'required|numeric',
            'sub_category_id' => 'numeric',
            'status' => 'required',
        ]);
        $product = Product::findOrFail($id);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/products/'), $image);
            $data['photo'] = $image;
        }
        $product->update($data);

        if(!$product->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product.index')->with('success', 'Product Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $product=Product::find($id);
        $path = 'images/products/' . $product->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($product->photo);
        $product->delete();


        return redirect()->back()->with(['success' =>'Product deleted successfully']);
    }
}
