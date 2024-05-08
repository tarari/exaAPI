<?php

namespace App\Models;

use App\Models\Vendor;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'stock'
    ];

    function category(){
        return $this->belongsTo(Category::class);
    }
    function vendor(){
        return $this->belongsTo(Vendor::class);
    }
}
