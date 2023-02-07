<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admiin\IndexController as AdminController;

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

//admin routs
Route::group(['prefix'=>'admin'], static function(){
    Route:: get('/', AdminController::class)->name('admin.index');
});


Route::get('/category', [NewsController::class, 'index'])->name('category');


Route::get('/news/{id}/show', [NewsController::class, 'show'])->name('news.show');
