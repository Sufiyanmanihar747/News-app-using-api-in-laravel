<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/news', [ArticleController::class, 'country']);
Route::get('/news/search', [ArticleController::class, 'search'])->name('news.search');
Route::get('/news/country', [ArticleController::class, 'country'])->name('news.country');
Route::get('/news/category', [ArticleController::class, 'category'])->name('news.category');
Route::get('/news/show', [ArticleController::class, 'show'])->name('news.show');
// Route::resource('news', ArticleController::class);
