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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductOfferController extends Controller
{
    public function add($id){
        $product=$id;
        return view('restaurant.dashboard.pages.product_offer.create',compact('product'));
    }

    public function index(Request $request)
    {

    }

    public function create()
    {

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
            $product=$request->product_id;
            return redirect()->route('product_offer.show', [ $product, 'product' => compact('product')])->with('success', 'Offer Created Successfully!');
        }
    }

    public function show($id)
    {
        $product_offer=ProductOffer::where('product_id',$id)->get();
        $product=Product::where('id',$id)->first();
        return view('restaurant.dashboard.pages.product_offer.index',compact('product_offer','product'));

    }


    public function edit($id)
    {
        $product_offer=ProductOffer::find($id);
        return view('restaurant.dashboard.pages.product_offer.edit',compact('product_offer'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'name' => 'required|string|max:100',
            'percentage' => 'required|numeric|min:0.01',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
        ]);
        $product_offer = ProductOffer::findOrFail($id);
        $product_offer->update($data);

        if(!$product_offer->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            $product=$product_offer->product_id;
            dd($product);
            return redirect()->route('product_offer.show', [ $product, 'product' => compact('product')])->with('success', 'Offer Updates Successfully!');
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
