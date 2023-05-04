<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Restaurant
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            if (\auth()->user()->user_type_id != User::RESTAURANT){
                return view('auth.unauthorized');
            }else{
                return $next($request);
            }
        }else{
            return redirect()->route('restaurant-register');
        }
    }
}
