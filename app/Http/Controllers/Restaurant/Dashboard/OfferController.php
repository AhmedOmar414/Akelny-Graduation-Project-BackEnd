<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function index(){

        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $offers=$restaurant->offers;
        return view('restaurant.dashboard.pages.offer.index',compact('offers'));
    }


    public function create()
    {

        return view('restaurant.dashboard.pages.offer.create');
    }


    public function store(Request $request)
    {
        $data= $request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'title' =>'required|string|max:100',
            'description' =>'required|string|max:100',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/offers/'), $image);
            $data['photo']  = $image;
        }
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $data['restaurant_id']=$restaurant->id;
        Offer::create($data);
        return redirect()->route('offer.index')->with('message','Offer Created Successfully');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $offer=Offer::where('id',$id)->first();
        return view('restaurant.dashboard.pages.offer.edit',compact('offer'));

    }


    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'photo' => 'image|mimes:jpg,png,jpeg,gif',
            'title' => 'required|string',
            'description' => 'required|string',

        ]);
        $offer = Offer::findOrFail($id);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/offers/'), $image);
            $data['photo'] = $image;
        }
        $offer->update($data);

        if(!$offer->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('offer.index')->with('success', 'Offer Updates Successfully!');
        }
    }


    public function destroy(Request $request)
    {
        $id = $request->id;
        $offers = Offer::findOrFail($id);
        $path = 'images/offers/' . $offers->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($offers->photo);
        $offers->delete();
        return redirect()->back()->with('success', 'Offer Deleted Successfully');
    }
}
