<?php

use App\Http\Controllers\Product;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->name('admin')->middleware('isAdmin');
Route::view('/create/products','createProduct')->name('product.create');
Route::get('/update/products/{id}',[Product::class,'update_view'])->name('product.update');
Route::post('create/product',[\App\Http\Controllers\Product::class,'store'])->name('create.product')->middleware('isAdmin');
Route::post('update/product/{id}',[\App\Http\Controllers\Product::class,'update'])->name('update.product')->middleware('isAdmin');
