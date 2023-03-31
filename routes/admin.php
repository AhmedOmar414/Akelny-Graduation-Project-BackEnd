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
Route::group(['prefix' => 'admin/','middleware' => 'guest'],function (){
    Route::get('/login-page',[\App\Http\Controllers\Admin\Auth\LoginController::class,'loginPage']);
    Route::post('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'login']);
});

Route::group(['middleware' => 'auth:web','prefix' => 'admin/'],function (){
    Route::get('dashboard',[\App\Http\Controllers\Admin\Dashboard\IndexController::class,'index']);
});
