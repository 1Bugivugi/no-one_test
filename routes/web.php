<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'articles'])->name('articles');

Route::get('/articles/{article:slug}', [ArticleController::class, 'find']);
Route::post('/articles/{article:slug}/likes', [ArticleController::class, 'likes'])->name('likesInc');
Route::post('/articles/{article:slug}/comments', [CommentController::class, 'store'])->name('comment');

Route::get('/tags/{tag:slug}', [TagController::class, 'main']);
