<?php

use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\PostController;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('site.index');

Route::resource('/blog/categories', CategoryController::class)->except('show');
Route::resource('/blog/posts', PostController::class)->except('show');
