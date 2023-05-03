<?php

namespace App\Http\Controllers\Restaurant\Dashboard;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $categories=$restaurant->categories;

        return view('restaurant.dashboard.pages.category.index',compact("categories"));
    }


    public function create()
    {
        return view('restaurant.dashboard.pages.category.create');
    }


    public function store(Request $request)
    {
       $data= $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
            'status' =>'required|string',
            'name' =>'required|string|max:100',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/categories/'), $image);
            $data['photo']  = $image;
        }
  $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
      $data['restaurant_id']=$restaurant->id;

        Category::create($data);
        return redirect()->route('category.index')->with('message','Category Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category= Category::findOrFail($id);
        return view('restaurant.dashboard.pages.category.edit',compact('category'));

    }


    public function update(Request $request, $id)
    {
        $categories = Category::findOrFail($id);
        $data = $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'name' =>'required|string|max:100',
            'status'=>'required',

        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/categories/'), $image);
            $data['photo']  = $image;
        }
        $data['restaurant_id']=Auth::user()->id;
        $categories->update($data);
        return redirect()->route('category.index')->with('success', 'Category Updated Successfully.');    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $category=Category::find($id);
        $path = 'images/categories/' . $category->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($category->photo);
        $category->delete();

        return redirect()->back()->with(['success' =>'Category deleted successfully']);

    }
}
