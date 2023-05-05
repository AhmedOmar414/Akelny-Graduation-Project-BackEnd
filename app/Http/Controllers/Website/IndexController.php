<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function main(){
       $categories=Category::all();
       return view('main',compact('categories'));
   }
}
