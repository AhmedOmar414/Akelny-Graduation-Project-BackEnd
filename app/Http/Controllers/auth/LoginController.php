<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_page(){
        return view('auth.login-form');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:25',
        ]);
        if (auth()->attempt(['email' => $request->email,'password' => $request->password,'user_type_id'=>'0'])) {
            return redirect('/dashboard');
        }elseif(auth()->attempt(['email' => $request->email,'password' => $request->password,'user_type_id'=>'1'])) {
            return redirect('/main');
        }
        elseif(auth()->attempt(['email' => $request->email,'password' => $request->password,'user_type_id'=>'2'])) {
            return redirect('/restaurant');
        }
        else{
            return redirect()->route('login.page')->with('error','email or password error');

        }
    }
}