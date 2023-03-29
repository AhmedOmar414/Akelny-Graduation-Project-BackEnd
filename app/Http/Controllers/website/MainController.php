<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function main(){
        return view('main');
    }
}
