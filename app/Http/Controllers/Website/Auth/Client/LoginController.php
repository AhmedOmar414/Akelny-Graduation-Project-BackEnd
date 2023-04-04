<?php

namespace App\Http\Controllers\Website\Auth\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPage(){
        return view('website.pages.auth.client.login');
    }

}
