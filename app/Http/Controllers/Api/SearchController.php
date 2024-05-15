<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Models\Category;

class SearchController extends Controller
{
    function searchByCategory(Request $request){
        dd($request->get('category'));
        $category_id=Category::select('id')->where('name','LIKE','%'.$request->get('category','').'%')->first();
        return new ProductCollection(
            Product::select('name','stock','price','category','vendor')
        ->where('category_id','LIKE','%'.$category_id.'%')->take(10)->get());

    }
}
