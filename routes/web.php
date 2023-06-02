<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});
Route::get('/products', [ProductController::class,'index']);
Route::get('/product/create', [ProductController::class,'create']);
Route::post('/product/create', [ProductController::class,'store']);
Route::get('/owners', [OwnerController::class,'index']);
Route::get('/owner/create', [OwnerController::class,'create']);
Route::post('/owner/create', [OwnerController::class,'store']);
Route::get('/categories', [CategoryController::class,'index']);
Route::get('/category/create', [CategoryController::class,'create']);
Route::post('/category/create', [CategoryController::class,'store']);
