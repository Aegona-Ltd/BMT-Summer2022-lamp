<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductsController;
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
Route::get('products/show/{id?}',[ProductsController::class,'show']);
Route::get('products/add',[ProductsController::class,'add']);
Route::get('products/update/{id}',[ProductsController::class,'update']);
Route::get('products/delete/{id}',[ProductsController::class,'delete']);
// Route::resource('post',[PostController::class]);

