<?php

use App\Http\Controllers\Website\Auth\User\LoginController;
use App\Http\Controllers\Website\Auth\User\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'user/'],function (){
    Route::get('auth-page',[RegisterController::class,'returnAuthPage']);
    Route::post('user-login',[RegisterController::class,'userLogin']);
});
