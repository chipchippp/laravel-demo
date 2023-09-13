<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/home' ,[\App\Http\Controllers\HomeController::class, "home"]);
Route::get('about-us', [\App\Http\Controllers\HomeController::class, "aboutUs"]);
Route::get('test', [\App\Http\Controllers\HomeController::class, "test"]);

Route::get('index2', [\App\Http\Controllers\PagesController::class, "index2"]);
Route::get('about2', [\App\Http\Controllers\PagesController::class, "about2"]);
//Route::get('app2', [\App\Http\Controllers\PagesController::class, "app2"]);






/*
//response an array
Route::get('/foods', function (){
    return ['sushi', 'sashimi','tofu'];
});
//response an object
Route::get('/aboutMe', function (){
    return response()->json([
            'name' => 'nguyen van loc',
            'age' => '18'
    ]); //response
});
//response another request = redirect
Route::get('/something' , function (){
    redirect('/foods'); //redirect to root
});
//Route::get('/products/{id}', [\App\Http\Controllers\HomeController::class, "detail"])->where('id', '[0-9]+');
//Route::get('/products/{productName}/{id}', [
//        \App\Http\Controllers\HomeController::class, "detail"
//    ])->where([
//        'id', '[a-zA-Z0-9]+']); //http:127.0.0.1:8000/products/aaa/11

//Route::get('/products/{productName}/{id}', [
//        \App\Http\Controllers\HomeController::class, 'detail'
//    ])->where([
//        'productName' => '[a-zA-Z0-9]+',
//        'id' => '[0-9]+'
//    ]);
Route::get('/layouts', [\App\Http\Controllers\HomeController::class, 'test']) -> name('layouts');

*/
