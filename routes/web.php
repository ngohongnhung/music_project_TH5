<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');


Route::get('/authors/index', [AuthorController::class, 'index'])->name('authors.index');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/categories/index', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/', [HomeController::class, 'getAllArticle']);
