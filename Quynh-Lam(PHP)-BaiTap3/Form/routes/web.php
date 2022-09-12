<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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
    return view('content.content');
});
Route::post('/savecontact', [PostController::class, 'saveinfo'])->name('savecontact');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/infocontact', [PostController::class, 'show'])->name('show');
    Route::get('/show', function () {
        return view('products');
    })->name('showproduct');
    Route::get('/getbyid/{id?}', [PostController::class, 'getbyid'])->name('getbyid');
    Route::post('/save', [PostController::class, 'save'])->name('save');
    Route::get('/showcontact', [PostController::class, 'showcontactinfo'])->name('showcontact');
    Route::post('/view', [PostController::class, 'view']);
    Route::post('/delete/{id?}', [PostController::class, 'delete']);
    Route::prefix('/product')->middleware(['auth'])->group(function () {
        Route::post('/saveproduct',[ProductController::class,'saveproduct'])->name('saveproduct');
        Route::get('/showproduct',[ProductController::class,'showproduct'])->name('showproduct');
        Route::post('/delete/{id?}',[ProductController::class,'delete'])->name('delete');
        Route::get('/getid/{id}',[ProductController::class,'getbyid']);
        Route::post('/update',[ProductController::class,'update'])->name('updateproduct');
        
    });
});

require __DIR__ . '/auth.php';
