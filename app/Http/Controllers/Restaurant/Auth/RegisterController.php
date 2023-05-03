<?php

namespace App\Http\Controllers\Restaurant\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\Auth\RestaurantRegisterRequest;
use App\Models\Restaurant;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerPage(){
        return view('website.pages.auth.restaurant.register');
    }
    public function register(RestaurantRegisterRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type_id = User::RESTAURANT;
        $user->save();

        $restaurant = new Restaurant();
        if($request->file('logo')) {
            $file = $request->file('logo');
            $image = date('logo') . $file->getClientOriginalName();
            $file->move(public_path('images/restaurants/'), $image);
            $restaurant->logo  = $image;
        }
        $restaurant->restaurant_name = $request->restaurant_name;
        $restaurant->lat = $request->lat;
        $restaurant->lng = $request->lng;
        $restaurant->tax_registration_number = $request->tax_registration_number;
        $restaurant->address = $request->address;
        $restaurant->open_at = $request->open_at;
        $restaurant->close_at = $request->close_at;
        $restaurant->user_id = $user->id;
        $restaurant->save();

        if(!$restaurant->save()){
            return redirect()->back()->with('message', 'There was a problem with your registration.');
        } else {
            auth()->login($user);
            return redirect()->route('/')->with('message', 'You are now registered!');
        }
    }
}
