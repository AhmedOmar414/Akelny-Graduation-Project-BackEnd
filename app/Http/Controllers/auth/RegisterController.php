<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_page(){
        return view('auth.register-form');
    }
    public function register(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:5|max:25',
            'mobile'=>'required',
        ]);
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
        ]);
        auth()->loginUsingId($data->id);
        return redirect('/website');
    }

}
