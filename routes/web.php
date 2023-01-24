<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

// Route::get('/', [NewsController::class, 'index'])->name('news.show');


Route::get('/category', [NewsController::class, 'index'])->name('category');


Route::get('/news/{id}/show', [NewsController::class, 'show'])->name('news.show');
