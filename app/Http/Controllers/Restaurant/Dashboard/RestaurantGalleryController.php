<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\RestaurantGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantGalleryController extends Controller
{
    public function index()
    {

        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $restaurant_gallery=$restaurant->restaurant_gallery;
        return view('restaurant.dashboard.pages.restaurant_gallery.index',compact('restaurant_gallery'));

    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'photo' => 'required|image|mimes:jpg,png,jpeg,gif',
        ]);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('photo') . $file->getClientOriginalName();
            $file->move(public_path('images/restaurant_gallery/'), $image);
            $data['photo']  = $image;
        }
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        $data['restaurant_id']=$restaurant->id;
        RestaurantGallery::create($data);
        return redirect()->back()->with('success','Images Added Successfully');
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

    }

    public function destroy($id)
    {
        $restaurant_gallery = RestaurantGallery::findOrFail($id);
        $path = 'images/restaurant_gallery/' . $restaurant_gallery->photo;
        if (file_exists($path)) {
            unlink($path);
        }
        Storage::delete($restaurant_gallery->photo);
        $restaurant_gallery->delete();
        return redirect()->back()->with('success', 'Image Deleted Successfully');
    }
}
