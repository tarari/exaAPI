<?php

use App\Http\Api\Controllers\SearchController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/products', [DashboardController::class, 'products'])->name('products');
Route::get('/vendors', [DashboardController::class, 'vendors'])->name('vendors');
Route::get('/categories', [DashboardController::class, 'categories'])->name('categories');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/search', [DashboardController::class, 'search']);
