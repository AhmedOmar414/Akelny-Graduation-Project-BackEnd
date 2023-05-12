<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   
    public function index()
    {
        $restaurants= Restaurant::all();
        return view('admin.dashboard.pages.review.index',compact('restaurants'));

    }

  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $restaurant=Restaurant::find($id);
        $reviews=Review::where('restaurant_id',$restaurant->id)->get();
        return view('admin.dashboard.pages.review.show',compact('restaurant','reviews'));
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy(Request $request)
    {
        $id = $request->id;
        $review=Review::find($id);
        $review->delete();

        return redirect()->back()->with(['success' =>'Review deleted successfully']);
    }
}
