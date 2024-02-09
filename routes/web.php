<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\CbookController;
use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
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

    Route::controller(BooksController::class)->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });
    Route::get('/book','index');
    Route::get('/book/{book}','show');
    Route::resource('/book', BooksController::class);
    Route::get('book/getDownload/{id}','getDownload')->name('book.getDownload');
    Route::get('book/readonline/{id}','readonline')->name('book.readonline');
    });

    Route::get('/searchbook', [CbookController::class, 'search'])->name('searchbook');
    Route::get('/homme', [CbookController::class, 'index'])->name('homme');
    Route::get('setlocale/{locale}', [CbookController::class, 'setLocale']);
    // Route::get('setlocale/{locale}', 'App\Http\Controllers\LocaleController@setLocale');
    
    
    Route::post('/books/{book}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    // Route::post('/books/{book}/reviews', 'ReviewController@store')->name('reviews.store');

    Route::delete('/reviews/{review}',  [ReviewController::class, 'destroy'])->name('reviews.destroy');
    
    // Route::get('/reviews/edit/{review}',   [ReviewController::class, 'edit'])->name('reviews.edit');
    // Route::delete('/reviews/{review}',  [ReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
Route::resource('admin/books', AdminBooksController::class)->middleware(['auth:admin', 'verified']);
Route::get('books/getDownload/{id}', [AdminBooksController::class, 'getDownload'])->middleware(['auth:admin', 'verified'])->name('books.getDownload');
Route::get('books/search', [AdminBooksController::class, 'search'])->middleware(['auth:admin', 'verified'])->name('books.search');


require __DIR__.'/adminauth.php';