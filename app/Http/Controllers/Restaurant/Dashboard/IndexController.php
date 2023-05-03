<?php

namespace App\Http\Controllers\restaurant\Dashboard;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index(){
        return view('restaurant.dashboard.pages.index');
    }
}
