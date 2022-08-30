<?php

use App\Http\Controllers\PostController;
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
// Route::get('/show')
Route::post('/contact',[PostController::class,'save'])->name('contacts');
Route::prefix('admin')->middleware(['auth'])->group(function(){
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/ContactForm',[PostController::class,'show'])->name('show');
});

require __DIR__.'/auth.php';