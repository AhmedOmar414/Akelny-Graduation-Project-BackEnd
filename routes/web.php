<?php

use App\Http\Controllers\Website\Auth\User\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
<<<<<<< HEAD
Route::middleware(['auth'])->group(function () {
    Route::get('home',[LoginController::class,'home'])->name('home');
=======
Route::get('/dashboard',function (){
   return view('dashboard.layout.index');
>>>>>>> 9e87834df378df40bb852baeb9cea2eeb78fa132
=======
Route::get('/dashboard',function (){
   return view('dashboard.layout.index');
>>>>>>> 9e87834df378df40bb852baeb9cea2eeb78fa132
});
