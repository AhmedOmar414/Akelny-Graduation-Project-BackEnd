<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
<<<<<<< HEAD
=======
use App\Http\Controllers\website\MainController;
>>>>>>> f1cb974e63bf222da77fa69ad297a0b314db269b
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
<<<<<<< HEAD

Route::get('/', function () {
    return view('main');
});
Route::get('/login-page',[LoginController::class,'login_page'])->name('login.page');
Route::get('/register-page',[RegisterController::class,'register_page'])->name('register.page');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');


    Route::get('/dashboard',function (){
        return view('dashboard.layout.index');
    });
    Route::get('/main',function (){
        return view('main');
    });
    Route::get('/restaurant',function (){
        return "restaurant";

});



=======
>>>>>>> f1cb974e63bf222da77fa69ad297a0b314db269b
