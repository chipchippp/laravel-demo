<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view("pages.index");
    }
    public function aboutUs(){
        return view("pages.aboutUs");
    }
    public function test(){
        $title = 'Laravel Course from Nguyen Van Loc';
        $x = 2;
        $y = 1;
        $name = 'Hoang';
        // return view("layouts.test", compact('title', 'x', 'y'));
        // return view('layouts.test')->with('name', $name);
        // 'with' method can only send 1 parameter
        // send an associative array
        $myphone = [
            'name' => 'ip 14',
            'year' => '2022',
            'isFavorited' => true
        ];
       // return view('layouts.app', compact('myphone'));
        // send directly
//        return view('layouts.test', [
//           'myphone' => $myphone
//        ]);
//        print_r(route('layouts'));
//        hiện tên link của web
        return view('layouts.test');
    }
//    public function detail($productName){
//        //return "product id = " .$id;
//        $phones = [
//            'iphone 15s' => 'iphone 15s',
//            'samsung' => 'samsung'
//        ];
//        return view('layouts.test', [
////            'product' => [
////                'name' => 'ip 15',
////                'year' => 2024
////            ]
//                'product' => $phones[$productName]  ?? 'unknown product'
//        ]);
//    }
    public function detail($productName ,$id){
        return "product name = " .$productName.
            " ,product id = " .$id;
    }
}
