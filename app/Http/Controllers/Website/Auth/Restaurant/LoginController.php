<?php

namespace App\Http\Controllers\Website\Auth\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\Auth\RestaurantLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPage(){
        return view('website.pages.auth.restaurant.login');
    }
    public function login(RestaurantLoginRequest $request){
        if (auth()->attempt(['email' => $request->email,'password' => $request->password,'user_type_id' => User::RESTAURANT])) {
            return redirect()->route('/');
        }
        else{
            return redirect()->route('restaurant-login')->with('error','email or password error');

        }
    }
public function logout(){
        auth()->logout();
    return redirect()->route('restaurant-login')->with('success','logout success');
}
}
