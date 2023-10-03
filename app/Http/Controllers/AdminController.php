<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin');
    }
    public function table_data(){
        return view('tables.data');
    }
    public function table_jsgrid(){
        return view('tables.jsgrid');
    }
    public function table_simple(){
        return view('tables.simple');
    }
}
