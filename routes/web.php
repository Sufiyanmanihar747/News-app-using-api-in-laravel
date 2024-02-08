<?php

use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/news', [BookController::class, 'country']);
Route::get('/news/search', [BookController::class, 'search'])->name('news.search');
Route::get('/news/country', [BookController::class, 'country'])->name('news.country');
Route::get('/news/show{request}', [BookController::class, 'show'])->name('news.show');
// Route::resource('news', BookController::class);
