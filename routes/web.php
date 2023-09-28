<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [\App\Http\Controllers\HomeController::class,"home"]);
Route::get('/category/{category:slug}', [\App\Http\Controllers\HomeController::class,"category"]);
//Route::get("about-us",[\App\Http\Controllers\HomeController::class,"aboutUs"]);
Route::get('/detail/{product:slug}', [\App\Http\Controllers\HomeController::class,"product"]);
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
Route::get('/shop-cart', [\App\Http\Controllers\HomeController::class,"shopCart"]);
Route::get('/checkout', [\App\Http\Controllers\HomeController::class,"checkOut"]);
Route::post('/checkout', [\App\Http\Controllers\HomeController::class,"placeOrder"]);
Route::get('/login', [\App\Http\Controllers\HomeController::class,"login"]);
Route::get('/thankTo', [\App\Http\Controllers\HomeController::class,"thankTo"]);
Route::get('/admin', [\App\Http\Controllers\HomeController::class,"admin"]);




