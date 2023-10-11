<?php

use Illuminate\Support\Facades\Auth;
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


Route::middleware("auth")->group(function (){
//cart
    Route::get('/add-to-cart/{product}', [\App\Http\Controllers\HomeController::class,"addToCart"]);
    Route::get('/delete/{product}', [\App\Http\Controllers\HomeController::class,"delete"]);
    Route::get('/clearCart', [\App\Http\Controllers\HomeController::class,"clearCart"]);
//    Route::get('/cart', [\App\Http\Controllers\HomeController::class,"cart"])->middleware('auth');
    Route::get('/cart', [\App\Http\Controllers\HomeController::class,"cart"]);

// check-out
    Route::get('/checkout', [\App\Http\Controllers\HomeController::class,"checkout"]);
    Route::post('/checkout', [\App\Http\Controllers\HomeController::class,"placeOrder"]);
    Route::get('/thank-to/{orders}', [\App\Http\Controllers\HomeController::class,"thankYou"]);

// paypal
    Route::get('/paypal-success/{order}', [\App\Http\Controllers\HomeController::class,"paypalSuccess"]);
    Route::get('/paypal-cancel/{order}', [\App\Http\Controllers\HomeController::class,"paypalCancel"]);
});


Route::middleware(["auth" , "is_admin"])->prefix("admin")->group(function (){
//include_once "admin.php";
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class,"dashboard"]);
    Route::get('/category', [\App\Http\Controllers\AdminController::class,"admin_category"]);
    Route::get('/order', [\App\Http\Controllers\AdminController::class,"admin_order"]);
    Route::get('/invoice', [\App\Http\Controllers\AdminController::class,"admin_invoice"]);
});

Route::prefix("product")->group(function (){
    Route::get('/', [\App\Http\Controllers\ProductController::class, "index"]);
    Route::get('/create', [\App\Http\Controllers\ProductController::class,"create"]);
    Route::post('/create', [\App\Http\Controllers\ProductController::class,"store"]);
    Route::get('/edit/{product}', [\App\Http\Controllers\ProductController::class,"edit"]);
    Route::put('/edit/{product}', [\App\Http\Controllers\ProductController::class,"update"]);
    Route::delete('/delete/{product}', [\App\Http\Controllers\ProductController::class,"delete"]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

