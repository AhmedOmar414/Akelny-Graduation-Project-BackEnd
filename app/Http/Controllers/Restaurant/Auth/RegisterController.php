<?php

namespace App\Http\Controllers\Restaurant\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Restaurant\Auth\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.pages.res_register');
    }
    public function registerStore(RegisterRequest $request){
        $data = $request->all();
        $data['role'] = 'res';
        $data['password'] = Hash::make($request->password);
        if($request->file('photo')) {
            $file = $request->file('photo');
            $image = date('logo') . $file->getClientOriginalName();
            $file->move(public_path('/storage/photos/1/res/'), $image);
            $data['photo']  = '/storage/photos/1/res/'.$image;
        }
        $check = User::create($data);
        Auth::loginUsingId($check->id);
        if($check){
            request()->session()->flash('success','Successfully registered');
            return redirect()->route('admin');
        }
        else{
            request()->session()->flash('error','Please try again!');
            return back();
        }
    }
}
