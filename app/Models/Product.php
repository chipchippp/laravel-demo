<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'slug',
        'price',
        'thumbnail',
        'description',
        'qty',
        'category_id'
    ];
    public function Category(){ //model relationship
//        return Category::find($this->category_id);
        return $this->belongsTo(Category::class);
    }
    public function Orders(){
        return $this->belongsToMany(Order::class, "order_product");
    }
}
