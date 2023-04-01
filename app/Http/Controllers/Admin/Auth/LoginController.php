<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        return view('dashboard.pages.login');
    }

    public function login(LoginRequest $request){
        if (auth()->attempt(['email'=>$request->email,'password'=>$request->password,'user_type_id'=>User::ADMIN])){
            return redirect('admin/dashboard');
        }else{
            return back()->withErrors(['email' => 'The provided credentials do not match']);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login-page');
    }
}
