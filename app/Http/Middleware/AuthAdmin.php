<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()){
            if($request->user()->user_type_id==1){
                return $next($request);
            }else{
                return to_route('login-register-form')->with('success','You do not have any permission to access this page');
            }
        } else {
            return to_route('login-register-form')->with('success','login to access the website info');
        }
        return $next($request);
    }
}
