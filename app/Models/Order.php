<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        "grand_total",
        "status",
        "user_id",
        "full_name",
        "tel",
        "address",
        "shipping_method",
        "payment_method",
        "is_paid",
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
    public function getGrandTotal(){
        return "$".number_format($this->grand_total, 2);
    }
    public function getPaid(){
        return $this->is_paid?"<span class='bg-success p-2 small'>Đã thanh toán</span>"
            :"<span class='bg-secondary p-2 small'>Chưa thanh toán</span>";
    }

    public function getStatus(){
        switch ($this -> status){
            case self::PENDING: return " <span class='text-danger'>Cho xác nhận </span>";
            case self::CONFIRMED: return "<span class='text-danger'>Đã xác nhận </span>";
            case self::SHIPPING: return "<span class='text-danger'>Đang giao hàng </span>";
            case self::SHIPPED: return " <span class='text-danger'>Đã giao hàng </span>";
            case self::COMPLETE: return "<span class='text-danger'>Hoàn thành </span>";
            case self::CANCEL: return "<span class='text-danger'>Hủy </span>";
        }
    }
}
