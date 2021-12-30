<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('client', [App\Http\Controllers\ClientController::class, 'index'])->name('client');
Route::get('product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
Route::get('order', [App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::get('cost', [App\Http\Controllers\CostController::class, 'index'])->name('cost');
