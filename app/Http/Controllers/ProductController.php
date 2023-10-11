<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Psy\Util\Str;

class ProductController extends Controller
{
    public function index(){
//        $products = Product::onlyTrashed()->orderBy("id", "desc") -> paginate(20); // lay san pham da xoa
        $products = Product::orderBy("id","desc")->paginate(20);
        return view("admin.pages.product",[
            "products"=>$products
        ]);
    }
    public function create(Product $product){
        $categories = Category::all();
        return view('admin.pages.create', compact('categories', 'product'));
    }
    public function store(Request $request){
        $request->validate([
           "name"=>"required|min:6" ,
            "price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:0",
            "category_id" => "required|numeric|min:1",
            "thumbnail" => "nullable|mimes:png,jpg,jpeg,gif|mimetypes:image/jpg,image/png,image/jpeg"
        ]);
        try {
            $thumbnail = null;
            //xu ly upload file
            if ($request ->hasFile("thumbnail")){
                $path = public_path("uploads");
                $file = $request -> file("thumbnail");
                $file_name = Str::random(5).time().Str::random(5).".".$file->getClientOriginalExtension();
                $file->move($path, $file_name);
                $thumbnail = "/uploads".$file_name;
            }
            Product::create([
                'name' =>$request->get("name"),
                'slug' =>$request->get("slug"),
                'price' => $request->get("price"),
                'qty' => $request->get("qty"),
                'category_id' => $request->get("category_id"),
                'description' => $request->get("description"),
            ]);
             return redirect()->to("/product")->with("success","Successfully");
        } catch (\Exception $e){
            return redirect('/product')->back()->withErrors($e->getMessage());
        }
    }

    public function edit($id){
        $product = Product::find($id);
//        dd($food);
        return view("admin.pages.edit")->with('product', $product);
    }
    public function update(Request $request, Product $product){
        $request->validate([
            "name"=>"required|min:6" ,
            "price"=>"required|numeric|min:0",
            "qty"=>"required|numeric|min:0",
            "category_id" => "required|numeric|min:1",
            "thumbnail" => "nullable|mimes:png,jpg,jpeg,gif|mimetypes:image/jpg,image/png,image/jpeg"
        ]);

        try {
            $product->update([
                    'name' =>$request->get("name"),
                    'slug' =>$request->get("slug"),
                    'price' => $request->get("price"),
                    'qty' => $request->get("qty"),
                    'category_id' => $request->get("category_id"),
                    'description' => $request->get("description"),
                ]);
            return redirect()->to("/product")->with("success","Successfully");

        }catch (\Exception $e  ){
            return redirect('/product')->back()->withErrors($e->getMessage());
        }
    }

    public function delete(Product $product, $id){
        try {
            $product = Product::find($id);
            $product -> delete();
            return redirect()->to("/product")->with("success","Successfully");

        }catch (\Exception $e  ){
            return redirect('/product')->back()->withErrors($e->getMessage());
        }
    }
}
