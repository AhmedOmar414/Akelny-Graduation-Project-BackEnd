<?php

namespace App\Http\Controllers\Website\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function returnAuthPage(){
        return view('website.auth.login_register');
    }
    public function userLogin (Request $request){

    }
}
