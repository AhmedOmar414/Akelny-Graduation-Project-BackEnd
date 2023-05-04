<?php


use App\Http\Controllers\Restaurant\Dashboard\CategoryController;
use App\Http\Controllers\Restaurant\Dashboard\OrderController;
use App\Http\Controllers\Restaurant\Dashboard\ProductController;
use App\Http\Controllers\Restaurant\Dashboard\ProductGalleryController;
use App\Http\Controllers\Restaurant\Dashboard\ProductOfferController;
use App\Http\Controllers\Restaurant\Dashboard\ProductSizeController;
use App\Http\Controllers\Restaurant\Dashboard\RestaurantGalleryController;
use App\Http\Controllers\Restaurant\Dashboard\Sub_CategoryController;
use App\Http\Controllers\Restaurant\Dashboard\SubCategoryController;
use Illuminate\Support\Facades\Route;

//auth
Route::group(['prefix' => 'restaurant/','middleware' => 'guest'],function (){
    //restaurants
    Route::get('register-page',[\App\Http\Controllers\Restaurant\Auth\RegisterController::class,'registerPage'])->name('restaurant-register');
    Route::post('register',[\App\Http\Controllers\Restaurant\Auth\RegisterController::class,'register'])->name('restaurant.register');

    Route::get('/login-page',[\App\Http\Controllers\Restaurant\Auth\LoginController::class,'loginPage'])->name('restaurant-login');
    Route::post('/login',[\App\Http\Controllers\Restaurant\Auth\LoginController::class,'login'])->name('restaurant.login');
});
Route::get('logout',[\App\Http\Controllers\Restaurant\Auth\LoginController::class,'logout'])->name('restaurant.logout');

//dashboard
Route::group(['prefix' => 'restaurant/','middleware' => 'rest'],function (){
    Route::get('dashboard',[\App\Http\Controllers\Restaurant\Dashboard\IndexController::class,'index'])->name('restaurant.dashboard');

    Route::resource('/restaurant_gallery', RestaurantGalleryController::class);

    Route::resource('/category', CategoryController::class);
    Route::resource('/sub_category', SubCategoryController::class);

    Route::resource('/product', ProductController::class);
    Route::resource('/product_gallery', ProductGalleryController::class);
    Route::resource('/product_offer', ProductOfferController::class);
    Route::resource('/product_size', ProductSizeController::class);

    Route::resource('/order', OrderController::class);



});