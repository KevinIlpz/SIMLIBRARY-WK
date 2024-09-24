<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\eBookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/download', [DownloadController::class, 'index'])->name('download');
Route::get('/ebook', [eBookController::class, 'index'])->name('ebook');