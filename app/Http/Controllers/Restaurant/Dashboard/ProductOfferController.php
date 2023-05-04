<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOffer;
use App\Models\Restaurant;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductOfferController extends Controller
{
    public function index()
    {
        $restaurantId=Auth::user()->id;
        $product_offer= ProductOffer::whereHas('product.sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();
        return view('restaurant.dashboard.pages.product_offer.index',compact("product_offer"));

    }

    public function create()
    {

        $restaurantId=Auth::user()->id;
        $products= Product::whereHas('sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();

        return view('restaurant.dashboard.pages.product_offer.create',compact('products'));

    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'name' => 'required|string|max:100',
            'percentage' => 'required|numeric|min:0.01',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'product_id' => 'required',
        ]);
        $product_offer=ProductOffer::create($data);
        if(!$product_offer->save()){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product_offer.index')->with('success', 'Offer Created Successfully!');
        }
    }

    public function show($id)
    {

    }


    public function edit($id)
    {
        $product_offer=ProductOffer::find($id);

        $restaurantId=Auth::user()->id;
        $products= Product::whereHas('sub_category.category.restaurant',
            function ($query) use ($restaurantId) {
                $query->where('user_id', $restaurantId);
            })->get();


        return view('restaurant.dashboard.pages.product_offer.edit',compact('product_offer','products'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'name' => 'required|string|max:100',
            'percentage' => 'required|numeric|min:0.01',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
            'product_id' => 'required',
        ]);
        $product_offer = ProductOffer::findOrFail($id);
        $product_offer->update($data);

        if(!$product_offer->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('product_offer.index')->with('success', 'Offer Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $product_offer=ProductOffer::find($id);
        $product_offer->delete();

        return redirect()->back()->with(['success' =>'Offer deleted successfully']);
    }
}
