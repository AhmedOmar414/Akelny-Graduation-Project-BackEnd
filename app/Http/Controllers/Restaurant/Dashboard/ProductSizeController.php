<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSize;
use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductSizeController extends Controller
{
    public function index()
    {
        $restaurantId=Auth::user()->id;
        $product_size= ProductSize::whereHas('product.sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();
        return view('restaurant.dashboard.pages.product_size.index',compact("product_size"));

    }

    public function create()
    {

        $restaurantId=Auth::user()->id;
        $products= Product::whereHas('sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();
        return view('restaurant.dashboard.pages.product_size.create',compact('products'));

    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'size' => 'required|numeric',
            'price' => 'required|numeric|min:0.01',
            'product_id' => 'required',
        ]);
        $product_size=ProductSize::create($data);
        if(!$product_size->save()){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product_size.index')->with('success', 'Size Created Successfully!');
        }
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $product_size=ProductSize::find($id);

        $restaurantId=Auth::user()->id;
        $products= Product::whereHas('sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();

        return view('restaurant.dashboard.pages.product_size.edit',compact('product_size','products'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'size' => 'required|numeric',
            'price' => 'required|numeric|min:0.01',
            'product_id' => 'required',
        ]);
        $product_size = ProductSize::findOrFail($id);
        $product_size->update($data);

        if(!$product_size->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product_size.index')->with('success', 'Size Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $product_size=ProductSize::find($id);
        $product_size->delete();

        return redirect()->back()->with(['success' =>'Size deleted successfully']);
    }
}
