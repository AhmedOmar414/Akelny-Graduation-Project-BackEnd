<?php

namespace App\Http\Controllers\Restaurant\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Restaurant\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('restaurant.frontend.pages.login');
    }
    public function loginSubmit(LoginRequest $request){
        if (auth()->attempt(['email'=>$request->email,'password'=>$request->password,'role'=>'res'])){
            return redirect()->route(
                'res'
            );
        }else{
            return back()->withErrors(['email' => 'The provided credentials do not match']);
        }
    }

    public function logout(){
        Session::forget('res');
        Auth::logout();
        request()->session()->flash('success','Logout successfully');
        return back();
    }
}
