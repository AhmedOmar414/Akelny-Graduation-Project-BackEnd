<?php

namespace App\Http\Controllers\Website\Auth\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Website\Auth\ClientRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerPage(){
        return view('website.pages.auth.client.register');
    }

    public function register(ClientRegisterRequest $request){
        $user = new User;
        $user->name = $request->name;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->user_type_id = User::CLIENT;
        $user->save();

        if(!$user->save()){
            return redirect()->back()->with('message', 'There was a problem with your registration.');
        } else {
            auth()->login($user);
            return redirect()->route('/')->with('message', 'You are now registered!');
        }
}
}
