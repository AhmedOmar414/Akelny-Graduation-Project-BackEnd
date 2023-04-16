<?php

namespace App\Http\Controllers\restaurant\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('restaurant.dashboard.layout.index');
    }
}
