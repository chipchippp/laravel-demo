<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateValidationRequest;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }
    public function admin_order(){
        $orders = Order::orderBy("id","desc")->paginate(20);
        return view("admin.pages.orders",["orders"=>$orders]);
    }
    public function admin_invoice(){
        $products = Product::paginate(20);
        return view('admin.pages.invoice', ["products" => $products]);
    }
}
