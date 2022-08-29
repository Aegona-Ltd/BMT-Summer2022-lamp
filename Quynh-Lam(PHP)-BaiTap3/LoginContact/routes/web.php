<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
/**
 * Route form contact
 */
Route::get('/', function () {
    return view('client.contact'); 
});
Route::post('/contact',[ContactController::class,'store'])->name("ccgidodelbietnua"); 
// end  


Route::prefix('admin')->middleware(['auth'])->group(function () { // admin/contact
 Route::get('/', function () {
        return view('dashboard');
    })->name('admin.dashboard');
 
    Route::get('/info', [ContactController::class,'show'])->name('admin.show');
});
require __DIR__.'/auth.php';
