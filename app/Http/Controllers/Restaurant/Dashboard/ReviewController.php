<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function index(){

        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $reviews=$restaurant->reviews;
        return view('restaurant.dashboard.pages.review.index',compact('reviews'));
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
        //
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
        $reviews = Review::findOrFail($id);
        $reviews->delete();
        return redirect()->back()->with('success', 'review Deleted Successfully');
    }
}
