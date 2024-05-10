<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    function index(){
        return view('dashboard');

    }
    function products(){
        $response=Http::timeout(10)->get(env('API_URL').'/api/products');
        $data=json_decode($response->body(),true);
        $data=$data['data'];
        return view('dashboard',['data'=>$data]);
    }
    function vendors(){
        $response=Http::timeout(10)->get(env('API_URL').'/api/vendors');
        $data=json_decode($response->body(),true);
        $data=$data['data'];
        return view('dashboard',['data'=>$data]);
    }
    function categories(){
        $response=Http::timeout(10)->get(env('API_URL').'/api/categories');
        $data=json_decode($response->body(),true);
        $data=$data['data'];
        return view('dashboard',['data'=>$data]);
    }
    function search(){
        $response=Http::get(env('API_URL').'/api/search');
        return $response->json();
    }
}
