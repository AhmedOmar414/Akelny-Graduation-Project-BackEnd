<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * insure that the Admin who is loged in
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            if (\auth()->user()->user_type_id= User::ADMIN){
                return $next($request);
            }else{
                return view('auth.unauthorized');
            }
        }else{
            return redirect('admin/login-page');
        }
    }
}
