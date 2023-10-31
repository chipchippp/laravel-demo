<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $fillable = [
        "user_id",
        "product_id",
//        "rating",
        "message"
    ];
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
//
//    public function product()
//    {
//        return $this->belongsTo(Product::class);
//    }
}
