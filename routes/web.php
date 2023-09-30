<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class,"home"]);
Route::get('/category/{category:slug}', [\App\Http\Controllers\HomeController::class,"category"]);
//Route::get("about-us",[\App\Http\Controllers\HomeController::class,"aboutUs"]);
Route::get('/detail/{product:slug}', [\App\Http\Controllers\HomeController::class,"product"]);

//cart
Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
Route::get('/delete/{product}', [\App\Http\Controllers\HomeController::class,"delete"]);
Route::get('/clearCart', [\App\Http\Controllers\HomeController::class,"clearCart"]);
Route::get('/cart', [\App\Http\Controllers\HomeController::class,"cart"]);


Route::get('/checkout', [\App\Http\Controllers\HomeController::class,"checkout"]);
Route::post('/checkout', [\App\Http\Controllers\HomeController::class,"placeOrder"]);
Route::get('/thank-you/{orders}', [\App\Http\Controllers\HomeController::class,"thankYou"]);


// admin
Route::get('/admin', [\App\Http\Controllers\HomeController::class,"admin"]);
Route::get('/table-data', [\App\Http\Controllers\HomeController::class,"table_data"]);
Route::get('/table-jsgrid', [\App\Http\Controllers\HomeController::class,"table_jsgrid"]);
Route::get('/table-simple', [\App\Http\Controllers\HomeController::class,"table_simple"]);








