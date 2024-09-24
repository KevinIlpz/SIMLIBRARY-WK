<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OPACController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/information', [InformationController::class, 'index'])->name('information');
Route::get('/opac', [OPACController::class, 'index'])->name('opac');