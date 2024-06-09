<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\ImageController;

Route::get('/upload', [ImageController::class, 'uploadForm'])->name('image.upload.form');
Route::post('/upload', [ImageController::class, 'uploadSubmit'])->name('image.upload');
