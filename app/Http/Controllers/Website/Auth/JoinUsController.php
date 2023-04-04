<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JoinUsController extends Controller
{
    public function joinUs(){
        return view('website.pages.join_us');
    }
}
