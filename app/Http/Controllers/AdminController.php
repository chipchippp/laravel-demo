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
    public function index(){
        $products = Product::all();
        return view('admin.pages.product', ['products' => $products]);
    }
    public function product_create(){
        $categories = Category::all();
        return view('admin.pages.create', ['categories' => $categories]);
    }
    public function store(Request $request){
//        dd($request);
        $products = Product::create([
//            'thumnail' =>$request->input("thumnail"),
            'name' =>$request->input("name"),
            'price' => $request->input("price"),
            'qty' => $request->input("qty"),
        ]);
        $products->save();
        return redirect('/admin/product');
    }

    public function edit($id){
//        dd($id);
        $product = Product::find($id);
//        dd($food);
        return view("admin.pages.edit")->with('product', $product);
    }
    public function update(Request $request, $id){
        //        $request->validate([
////            'name' => 'required|unique:foods',
//            'name' => new Uppercase(),
//            'count' => 'required|min:0|max:1000',
//            'category_id' => 'required',
//        ]);
        $product = Product::where('id', $id)
            ->update([
                'name'=> $request->input('name'),
                'price' => $request->input('price'),
                'qty' => $request->input('qty'),
            ]);
        return redirect('/admin/product');
    }

    public function destroy($id){
        $product = Product::find($id);
        $product -> delete();
//        dd($id);
        return redirect('/admin/product');
    }
}
