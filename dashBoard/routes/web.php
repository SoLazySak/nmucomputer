<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('addprod');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('storeprod');


Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('addCate');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('storeCate');


Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('addBrand');
Route::post('/brand/store', [App\Http\Controllers\BrandController::class, 'store'])->name('storeBrand');
Route::get('/brand/{id}/edit', [App\Http\Controllers\BrandController::class, 'edit'])->name('editBrand');
Route::put('/brand/update/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('updateBrand');
Route::delete('/brand/destroy/{id}', [App\Http\Controllers\BrandController::class, 'destroy'])->name('deleteBrand');



Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('orderList');



