<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    public function index()
    {
//         $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
//        $categories=$restaurant->categories->first();
//        $sub_categories=$categories->sub_categories;
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $categories=$restaurant->categories;
        return view('restaurant.dashboard.pages.sub_category.index',compact("categories"));
    }


    public function create()
    {
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $categories=$restaurant->categories;
        return view('restaurant.dashboard.pages.sub_category.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'name' =>'required|string|max:100',
            'category_id' =>'required',
        ]);
        Subcategory::create($data);
        return redirect()->route('sub_category.index')->with('message','Sub Category Created Successfully');
    }


    public function show($id)
    {
        $category=Category::find($id);
        $sub_categories=$category->sub_categories;
        return view('restaurant.dashboard.pages.sub_category.show',compact('category','sub_categories'));
    }


    public function edit($id)
    {
        $sub_category= Subcategory::findOrFail($id);

        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();

        $categories=$restaurant->categories;
        return view('restaurant.dashboard.pages.sub_category.edit',compact('sub_category','categories'));

    }


    public function update(Request $request, $id)
    {
        $sub_categories = Subcategory::findOrFail($id);
        $data = $request->validate([
            'name' =>'required|string|max:100',
            'category_id' =>'numeric',
        ]);
        $sub_categories->update($data);
        return redirect()->route('sub_category.index')->with('success', 'Sub Category Updated Successfully.');
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        Subcategory::find($id)->delete();
        return redirect()->back()->with(['success' =>'Sub Category deleted successfully']);

    }
}
