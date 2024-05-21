<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ProductController extends Controller
{
    function index(){
        return new ProductCollection(Product::all());
    }
    function show(Product $product){
        return new ProductResource($product);
    }
    function store(Request $request){
        $data=$request->all();
        $product=Product::create($data);
        return $product;
    }
    function update(Request $request,Product $product){
        $data=$request->all();
        $product->update($data);
        return $product;
    }
    function destroy(Product $product){
        $product->delete();
    }
}
