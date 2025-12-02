<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('site.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::resource('/blog/categories', CategoryController::class)->except('show');
Route::resource('/blog/posts', PostController::class)->except('show');
Route::get('/blog/{category:slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/{post:slug}', [BlogController::class, 'post'])->name('blog.category');
