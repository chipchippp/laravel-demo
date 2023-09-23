<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [\App\Http\Controllers\HomeController::class,"home"]);
Route::get('/category/{category:slug}', [\App\Http\Controllers\HomeController::class,"category"]);
//Route::get("about-us",[\App\Http\Controllers\HomeController::class,"aboutUs"]);
Route::get('/detail/{product:slug}', [\App\Http\Controllers\HomeController::class,"product"]);
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
Route::get('/shop-cart', [\App\Http\Controllers\HomeController::class,"shopCart"]);
Route::get('/checkout', [\App\Http\Controllers\HomeController::class,"checkOut"]);


