<?php

use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\FavoriteProductController;
use App\Http\Controllers\Website\FavoriteRestaurantController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Website\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[\App\Http\Controllers\Website\IndexController::class,'main'])->name('/');

Route::get('/menu/{id}',[\App\Http\Controllers\Website\IndexController::class,'menu'])->name('menu');

Route::get('/offer_page',[\App\Http\Controllers\Website\IndexController::class,'offer_page'])->name('offer.page');

Route::get('/trending',[\App\Http\Controllers\Website\IndexController::class,'trending'])->name('trending');

Route::get('/most_popular',[\App\Http\Controllers\Website\IndexController::class,'most_popular'])->name('most.popular');
Route::get('/all_restaurants',[\App\Http\Controllers\Website\IndexController::class,'all_restaurants'])->name('all.restaurants');

Route::get('/most_sale',[\App\Http\Controllers\Website\IndexController::class,'most_sale'])->name('most.sale');
//cart
Route::post('add_to_cart',[CartController::class,'add_to_cart'])->name('add.to.cart');

//favorite restaurants
Route::post('/add_to_my_favorite_restaurants',[FavoriteRestaurantController::class,'add_to_my_favorite_restaurants']);
Route::get('/get_my_favorite_restaurants',[FavoriteRestaurantController::class,'get_my_favorite_restaurants'])->name('favorite.restaurants');
Route::delete('/favorites/{id}',[FavoriteRestaurantController::class,'delete'])->name('favorite.restaurants.delete');
//favorite products
Route::post('/add_to_my_favorite_products',[FavoriteProductController::class,'add_to_my_favorite_products']);
Route::get('/get_my_favorite_products',[FavoriteProductController::class,'get_my_favorite_products'])->name('favorite.products');
Route::delete('/favorite_products/{id}',[FavoriteProductController::class,'delete'])->name('favorite.products.delete');
Route::resource('/user_profile', ProfileController::class);

Route::get('/contact-us',[\App\Http\Controllers\Admin\Dashboard\MessageController::class,'contact_us'])->name('contact_us');
Route::post('/store-message',[\App\Http\Controllers\Admin\Dashboard\MessageController::class,'store'])->name('message.store');



Route::get('/get-price/{size}/{product_id}',[\App\Http\Controllers\Website\IndexController::class,'getprice']);


