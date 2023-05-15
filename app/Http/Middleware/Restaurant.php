<?php

namespace App\Http\Middleware;

use Closure;

class Restaurant
{

    public function handle($request, Closure $next)
    {
        if($request->user()->role=='res'){
            return $next($request);
        }
        else{
            request()->session()->flash('error','You do not have any permission to access this page');
            return redirect()->route($request->user()->role);
        }
    }
}
