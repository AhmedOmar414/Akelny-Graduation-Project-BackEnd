<?php

namespace App\Http\Controllers;

use App\RestaurantReviews;
use Illuminate\Http\Request;

class RestaurantsReviews extends Controller
{
    public function index(){
        $reviews=RestaurantReviews::paginate(10);
        if (auth()->user()->role =='res'){
            $reviews=RestaurantReviews::where('res_id',auth()->user()->id)->paginate(10);
        }
        return view('backend.res_reviews.index')->with('reviews',$reviews);
    }

    public function destroy($id){
        RestaurantReviews::find($id)->delete();
        request()->session()->flash('success','Banner successfully deleted');
        return redirect()->back();
    }

}
