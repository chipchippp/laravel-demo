<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'full_name',
        "tel",
        'address',
        'grand_total',
        'status',
        'user_id',
        "shipping_method",
        "payment_method",
        'is_maid',
    ];
}
