<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductsController;
use App\Http\Controllers\backend\ReportController;
use App\Http\Controllers\backend\OrdersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//font-end-router
Route::get('/', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::post('order', [ProductController::class, 'store'])->name('order.store');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');


//back-end-router
Route::resource('backend', DashboardController::class);
Route::resource('backend-products', ProductsController::class);
Route::resource('backend-orders', OrdersController::class);
Route::resource('backend-report', ReportController::class);