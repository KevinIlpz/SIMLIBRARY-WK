<?php

use Illuminate\http\Request;
use App\Http\Controllers\BookController;

Route::post('/book', [BookController::class, 'create']);
Route::get('/book', [BookController::class, 'index']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});