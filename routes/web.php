<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\WriterController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', [HomeController::class, 'home'])->name('home');

// Category Page
Route::get('/category', [CategoryController::class, 'category'])->name('category');

// Route Detail Page untuk setiap kategori
Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

// Route Detail Page untuk setiap bidang
Route::get('/category/{category}/{course}/{article}', [ArticleController::class, 'show'])->name('detail');

// Route Writers Page
Route::get('/writers', [WriterController::class, 'writers'])->name('writers');

// Route Detail dari Writers Page
Route::get('/writers/{writer}', [WriterController::class, 'show'])->name('writers.detail');

// Route About Us
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Route Popular Page dengan Pagination
Route::get('/popular', [PopularController::class, 'popular'])->name('popular');

Route::get('/popular/page/{page}', [PopularController::class, 'paginate'])->name('popular.page');
