<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
//        $product = Product::
//             where("qty", ">", 30)
////            ->where("name", "like", "%Olson%")
//            -> where("price", ">", 500)
//            ->orderBy("create_at", "desc")
//            ->limit(12)->get();
        $products = Product::orderBy("create_at", "desc")->paginate(12); // tao ra phan trang
        return view("pages.home", compact("products"));
    }
    public function aboutUs(){
        return view("pages.aboutUs");
    }
    public function category(Category $category){
        // dua vao id tim category
        //
//        $category = Category::find($id);
//        if ($category == null){
//            return abort(404);4
//        }
//        $category = Category::findOrFail($id);

        $products = Product:: orderBy("create_at", "desc")
            ->paginate(12)->where("categories_id", $category->id);
        return view("pages.category", compact("products"));
    }
}
