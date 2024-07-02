<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ReadController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get("read/{slug}", [ReadController::class, 'index'])->name('read');
Route::get("read/news/{slug}", [ReadController::class, 'news'])->name('read.news');

Route::get("detail/{slug}", [DetailController::class, 'index'])->name('detail');

Route::get("search", [SearchController::class, 'index'])->name('search');
Route::get("search/genre", [SearchController::class, 'genre'])->name('search.genre');

Route::get("bookmark", [BookController::class, 'index'])->name('bookmark');
Route::get("news", [NewsController::class, 'index'])->name('news');

Route::prefix("auth")->controller(AuthController::class)->group(function () {
    Route::get("login", 'login')->name('login');
    Route::get("register", 'register')->name('register');
});
