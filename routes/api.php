<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ChapterController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\NovelController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
});

Route::prefix('news')->controller(NewsController::class)->group(function () {
    Route::get('', 'getNews');
    Route::get('/read/{slug}', 'getDetailNews');
});

Route::prefix('novel')->controller(NovelController::class)->group(function () {
    Route::get('search/{title}', 'getNovelByTitle');
    Route::get('detail/{slug}', 'getDetailNovel');
    Route::get('ranking-novel', 'getRangkingNovel');
});

Route::prefix('chapter')->controller(ChapterController::class)->group(function () {
    Route::get('new-chapter', 'getNewChapter');
    Route::get('read/{slug}', 'getDetailChapter');
});
