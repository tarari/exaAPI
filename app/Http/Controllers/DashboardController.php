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
        dd($response);
    }
    function search(){
        $response=Http::get(env('API_URL').'/api/products');
        return $response->json();
    }
}
