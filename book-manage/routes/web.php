<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/books', \App\Http\Controllers\Book\IndexController::class)->name('books');
Route::get('/books/create', \App\Http\Controllers\Book\Create\IndexController::class)->name('books.create.index');
Route::post('/books/create', \App\Http\Controllers\Book\Create\PostController::class)->name('books.create.post');
Route::get('/books/detail/{bookId}', \App\Http\Controllers\Book\DetailController::class)->name('books.detail-bookId');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
