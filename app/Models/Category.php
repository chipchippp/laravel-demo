<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
//    protected $primaryKey = 'id'; //nếu là id thì k cần viết lại
    protected $table = "categories";
    protected $fillable = [
        'name',
        'slug'
    ];

}
