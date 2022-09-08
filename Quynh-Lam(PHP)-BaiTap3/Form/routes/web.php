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
    return view('client.contact');
});


Route::post('/contact', [PostController::class, 'save'])->name('contacts');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/ContactForm', [PostController::class, 'show'])->name('show');
    Route::get('update/{id?}',[PostController::class,'getinfoupdate']);
    Route::post('update',[PostController::class,'update'])->name('update');
    Route::post('/delete/{id?}',[PostController::class,'delete'])->name('delete');
    Route::prefix('products')->middleware(['auth'])->group(function () {
        Route::get('/add', [ProductsController::class ,'getinfo'])->name('getinfo');
        Route::get('/showproduct', [ProductsController::class,'show'])->name('showproduct');
        Route::post('/product', [ProductsController::class, 'save'])->name('saveproducts');
        Route::get('/product/{id?}',[ProductsController::class,'getinfoup'])->name('getinfoup');
        Route::post('/update',[ProductsController::class,'saveupdate'])->name('saveupdate');
        Route::post('/delete/{id?}',[ProductsController::class,'delete'])->name('delete');
    });
});


require __DIR__ . '/auth.php';
