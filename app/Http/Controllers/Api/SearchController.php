<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;

class SearchController extends Controller
{
    function searchByCategory(Request $request){

        return new ProductCollection(Product::where('category_id',$request->category_id));

    }
}
