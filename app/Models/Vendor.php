<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable=[
        'nif',
        'name'
    ];

    function products(){
        return $this->hasMany(Product::class);
    }
}
