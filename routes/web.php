<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admiin\NewsController as AdminController;

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


Route::group(['prefix'=>'admin'], static function(){

    Route:: get('/', [AdminController::class, 'index'])->name('admin.index');
    Route:: match(['post', 'get'], '/news', [AdminController::class, 'store'])->name('admin.news');
    Route:: get('/news/create', [AdminController::class, 'create'])->name('admin.news.create');

});


Route::group(['prefix'=>'home'], static function(){
    Route::get('/', [NewsController::class, 'index'])->name('category');
    Route::get('/news/{id}/show', [NewsController::class, 'show'])->name('news.show');
    Route::get('/feedbackForm', [NewsController::class, 'feedbackForm'])->name('news.feedbackForm');
    Route::get('/dataForm', [NewsController::class, 'dataForm'])->name('news.dataForm');
});





