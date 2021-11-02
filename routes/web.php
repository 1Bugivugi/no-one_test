<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('/articles/{article:slug}', [ArticleController::class, 'find']);

Route::post('/articles/{article:slug}/likes', [ArticleController::class, 'likes']);
Route::post('/articles/{article:slug}/views', [ArticleController::class, 'views']);
Route::post('/articles/{article:slug}/comments', [CommentController::class, 'store']);

Route::get('/tags/{tag:name}', [TagController::class, 'main']);
