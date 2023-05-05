<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
    public function index(){

        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $offers=$restaurant->offers;
        return view('restaurant.dashboard.pages.review.index',compact('offers'));
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
        $offers = Offer::findOrFail($id);
        $offers->delete();
        return redirect()->back()->with('success', 'Offer Deleted Successfully');
    }
}
