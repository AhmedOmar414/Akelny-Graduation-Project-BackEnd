<?php

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
Route::get('/',[\App\Http\Controllers\Website\IndexController::class,'main'])->name('/');

Route::group(['prefix' => 'website/'],function (){

    //join us
    Route::get('join-us',[\App\Http\Controllers\Website\Auth\JoinUsController::class,'joinUs']);

    //client
    Route::get('client-register',[\App\Http\Controllers\Website\Auth\Client\RegisterController::class,'registerPage'])->name('client-register');
    Route::get('client-login',[\App\Http\Controllers\Website\Auth\Client\LoginController::class,'loginPage'])->name('client-login');

    Route::post('register',[\App\Http\Controllers\Website\Auth\Client\RegisterController::class,'register'])->name('client.register');
    Route::post('login',[\App\Http\Controllers\Website\Auth\Client\LoginController::class,'login'])->name('client.login');
    Route::get('logout',[\App\Http\Controllers\Website\Auth\Client\LoginController::class,'logout'])->name('website.logout');

});

