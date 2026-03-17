<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/sach-kinh-dien', [BookController::class, 'laySachKinhDien']);
Route::get('/nguyennghia-gif', function () {
    return 'nguyennghia-gif';
});
Route::get('/trananhduy', function () {
    return 'trananhduy';
});
Route::get('/lothithanhhuonga6-web', function () {
    return 'lothithanhhuonga6-web';
});

Route::get('/phandinhphuc', function () {
    return 'phandinhphuc';
});
Route::get('/phamvangiaphu', function () {
    return 'phamvangiaphu';
});