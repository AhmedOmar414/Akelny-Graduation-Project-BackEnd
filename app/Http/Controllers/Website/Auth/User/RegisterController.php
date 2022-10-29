<?php

namespace App\Http\Controllers\Website\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function returnAuthPage(){
        return view('website.auth.login_register');
    }

public function userLogin (Request $request){

}

    public function userRegister(Request $request){
       $data = $request->all();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'mobile' => 'required|integer'
        ]);

        User::create($data);
        return view('website.home.home_page');
    }
}
