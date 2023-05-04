<?php

namespace App\Http\Controllers\Website\Auth\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\Auth\ClientLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        return view('website.pages.auth.client.login');
    }
    public function login(ClientLoginRequest $request){
        if (auth()->attempt(['email'=>$request->email,'password'=>$request->password])){

            return redirect()->route('/');
        }else{
            return back()->withErrors(['email' => 'The provided credentials do not match']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('website/client-register');
    }
}
