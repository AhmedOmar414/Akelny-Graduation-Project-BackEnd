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
Route::get('/',[\App\Http\Controllers\Website\IndexController::class,'index']);

Route::group(['prefix' => 'website/'],function (){

    //join us
    Route::get('join-us',[\App\Http\Controllers\Website\Auth\JoinUsController::class,'joinUs']);

    //client
    Route::get('client-login',[\App\Http\Controllers\Website\Auth\Client\LoginController::class,'loginPage'])->name('client-login');
    Route::get('client-register',[\App\Http\Controllers\Website\Auth\Client\RegisterController::class,'registerPage'])->name('client-register');

    //restaurants
    Route::get('restaurant-login',[\App\Http\Controllers\Website\Auth\Restaurant\LoginController::class,'loginPage'])->name('restaurant-login');
    Route::get('restaurant-register',[\App\Http\Controllers\Website\Auth\Restaurant\LoginController::class,'registerPage'])->name('restaurant-register');

});
