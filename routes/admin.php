<?php

use App\Http\Controllers\Admin\Dashboard\ClientController;
use App\Http\Controllers\Admin\Dashboard\OrderController;
use App\Http\Controllers\Admin\Dashboard\ProfileController;
use App\Http\Controllers\Admin\Dashboard\RestaurantController;
use App\Http\Controllers\Admin\Dashboard\ReviewController;
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

Route::group(['prefix' => 'admin/','middleware' => 'guest'],function (){
    Route::get('/login-page',[\App\Http\Controllers\Admin\Auth\LoginController::class,'loginPage']);
    Route::post('/login',[\App\Http\Controllers\Admin\Auth\LoginController::class,'login']);
});

Route::group(['prefix' => 'admin/'],function () {

    Route::get('logout', [\App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');
});


//dashboard
Route::group(['prefix' => 'admin/','middleware' => 'auth','admin'],function (){
    //index
    Route::get('dashboard',[\App\Http\Controllers\Admin\Dashboard\IndexController::class,'index'])->name('admin.dashboard');

    //profile
    Route::resource('/admin_profile', ProfileController::class);
//pages
    Route::resource('/client', ClientController::class);
    Route::resource('/restaurant', RestaurantController::class);
    Route::resource('/all_orders', OrderController::class);
    Route::resource('/all_reviews', ReviewController::class);
    //messages
    Route::get('/messages',[\App\Http\Controllers\Admin\Dashboard\MessageController::class,'index'])->name('messages.index');

});


