<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'grand_total',
        'status',
        'email',
        'user_id',
        'full_name',
        'tel',
        'address',
        'shipping_method',
        'payment_method',
        'is_maid',
    ];
    const PENDING = 0;
    const CONFIRMED = 1;
    const SHIPPING = 2;
    const SHIPPED = 3;
    const COMPLETE = 4;
    const CANCEL = 5;
    public function Products(){
        return $this->belongsTo(Product::class, "order_product")->with(["qty", "price"]);
    }
}
