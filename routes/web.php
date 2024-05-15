<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Api\Controllers\SearchController;

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
Route::middleware('notoken')->group(
    Route::get('/products', [DashboardController::class, 'products'])->name('products'),
    Route::get('/vendors', [DashboardController::class, 'vendors'])->name('vendors'),
    Route::get('/categories', [DashboardController::class, 'categories'])->name('categories'),
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'),
    Route::get('/search', [DashboardController::class, 'search']),
);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/auth',[AuthController::class,'auth'])->name('auth');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
