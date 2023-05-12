<?php

namespace App\Http\Controllers\Restaurant\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        return view('restaurant.dashboard.pages.profile.index',compact('restaurant'));
    }


    public function create()
    {
         }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $restaurant=Restaurant::where('user_id',Auth::user()->id)->first();
        return view('restaurant.dashboard.pages.profile.edit',compact('restaurant'));
    }

    public function update(Request $request, $id)
    {
        $data =$request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,gif',
            'restaurant_name' => 'required|string|max:100',
            'address' => 'required|string|max:100',
            'open_at' => 'required',
            'close_at' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);
        $restaurant = Restaurant::findOrFail($id);

        if($request->file('logo')) {
            $file = $request->file('logo');
            $image = date('logo') . $file->getClientOriginalName();
            $file->move(public_path('images/restaurants/'), $image);
            $data['logo'] = $image;
        }
        $restaurant->update($data);
        if(!$restaurant->update($data)){
            return redirect()->back()->with('message', 'There was a problem with add restaurant.');
        } else {
            return redirect()->route('profile.index')->with('success', 'Profile Updates Successfully!');
        }
    }

    public function destroy($id)
    {
        //
    }
}
