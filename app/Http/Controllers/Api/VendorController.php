<?php

namespace App\Http\Controllers\Api;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    function index(){
        return Vendor::all();
    }
    function show(Vendor $vendor){
        return $vendor;
    }
    function store(Request $request){
        $data=$request->all();
        $vendor=Vendor::create($data);
        return $vendor;
    }
    function update(Request $request,Vendor $vendor){
        $data=$request->all();
        $vendor->update($data);
        return $vendor;
    }
    function destroy(Vendor $vendor){
        $vendor->delete();
    }
}
