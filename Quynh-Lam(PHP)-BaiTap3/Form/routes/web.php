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


Route::post('/contact', [PostController::class, 'save'])->name('contacts');
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/ContactForm', [PostController::class, 'show'])->name('show');
    Route::get('/update/{id?}', function ($id) {
        $contact = App\Models\Savecontact::find($id);
        return view('layouts.Detailsupdating', ["contact" => $contact]);
    })->name('update');
    Route::post('/saveupdate', [PostController::class, 'update'])->name('saveupdate');
    Route::post('/delete/{id?}', [PostController::class, 'deletes'])->name('delete');

});

require __DIR__ . '/auth.php';
