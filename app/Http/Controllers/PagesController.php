<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index2(){
        return view('pages.index2');
    }
    public function about2(){
        $name = "Trang";
//        return view('pages.about2') -> with('name', $name);
        $names = array('Loc', 'Trang', 'Join', 'Tom', 'David Beckham');
//          $names =[];
        return view('pages.about2', [
            'names' => $names
        ]);
    }

}
