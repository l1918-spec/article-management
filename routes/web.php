<?php


use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('articles.index'); // Home page displaying articles
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create'); // Page to add new article
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store'); // Store new article
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit'); // Edit existing article
Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update'); // Update article
Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy'); // Delete article