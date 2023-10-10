<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
    public function admin_product(){
        $products = Product::all();
        return view('admin.pages.product', ['products' => $products]);
    }
    public function product_create(){
        $categories = Category::all();
        return view('admin.pages.create', ['categories' => $categories]);
    }
    public function store(Request $request){
        dd($request);
        $products = Product::create([
//            'thumnail' =>$request->input("thumnail"),
            'name' =>$request->input("name"),
            'price' => $request->input("price"),
            'qty' => $request->input("qty"),
        ]);
        $products->save();
        return redirect('/admin/product');
    }
}
