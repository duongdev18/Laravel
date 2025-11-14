<?php

use Illuminate\Support\Facades\Route;
// Thêm dòng này để import Controller
use App\Http\Controllers\BookController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Trang chủ
Route::get('/', [BookController::class, 'home'])->name('home');

// Trang danh sách theo loại
Route::get('/category/{id}', [BookController::class, 'category'])->name('category');

// Trang chi tiết sách
Route::get('/book/{id}', [BookController::class, 'detail'])->name('book.detail');
