<?php
namespace App\Http\Controllers\Website\Auth\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function returnAuthPage(){
        return view('website.auth.login_register');
    }
    public function userRegister(RegisterRequest $request)
    {
        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password)
        ]);
        auth()->loginUsingId($data->id);
        return view('website.home.home_page');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login-register-form');
    }
}
