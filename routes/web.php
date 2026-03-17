<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/sach-kinh-dien', [BookController::class, 'laySachKinhDien']);
Route::get('/phandinhphuc2108-gif', function () {
    return 'Phan Dinh Phuc';
});