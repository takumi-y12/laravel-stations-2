<?php

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
    return view('welcome');
});


use App\Http\Controllers\Admin\AdminMovieController;

Route::prefix('admin')->name('admin.')->group(function () {
    // 映画一覧
    Route::get('movies', [AdminMovieController::class, 'index'])->name('movies.index');

    // 映画詳細
    Route::get('movies/{id}', [AdminMovieController::class, 'show'])->name('movies.show');

    // 映画新規作成画面表示
    Route::get('movies/create', [AdminMovieController::class, 'create'])->name('movies.create');

    // 映画データの保存
    Route::post('movies/store', [AdminMovieController::class, 'store'])->name('movies.store');

});
