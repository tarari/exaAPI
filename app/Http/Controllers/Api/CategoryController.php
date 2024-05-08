<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    function index(){
        return new CategoryCollection(Category::all());
    }
    function show(Category $category){
        return new CategoryResource($category);
    }
    function store(Request $request){
        $data=$request->all();
        $category=Category::create($data);
        return $category;
    }
    function update(Request $request,Category $category){
        $data=$request->all();
        $category->update($data);
        return $category;
    }
    function destroy(Category $category){
        $category->delete();
    }

}
