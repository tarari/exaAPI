<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    function searchByCategory(Request $request){
        $products=Product::where('category_id',$request->category_id)->get();
        return $products;
    }
}
