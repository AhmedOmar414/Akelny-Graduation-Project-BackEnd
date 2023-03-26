<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\website\MainController;
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
//auth
Route::get('/login-page',[LoginController::class,'login_page'])->name('login.page');
Route::get('/register-page',[RegisterController::class,'register_page'])->name('register.page');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//dashboard admin
Route::get('/dashboard',function (){
   return view('dashboard.layout.index');
});
//website
Route::get('/',[MainController::class,'main'])->name('main');

Route::group(['middleware' => ['auth']], function() {
});