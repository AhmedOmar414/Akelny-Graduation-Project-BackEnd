<?php

namespace App\Http\Controllers\Website\Auth\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    public function userLogin(LoginRequest $request)
    {

        if (!auth()->attempt(['email' => $request->email,'password' => $request->password])) {
            return redirect()->back()->with('fail','email or password error');
        }
       else{
        return redirect()->route('home');
       }
    }

    public function home(){

        return view('website.home.home_page');
          }
}
