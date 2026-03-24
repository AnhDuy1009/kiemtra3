<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Trang chủ: Hiển thị 8 cuốn sách mặc định
Route::get('/books', [BookController::class, 'index'])->name('book.index');

// Trang danh mục: Hiển thị sách theo thể loại
Route::get('/books/theloai/{id}', [BookController::class, 'theloai']);

Route::get('/books/chitiet/{id}', [\App\Http\Controllers\BookController::class, 'chitiet']);