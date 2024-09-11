<?php

use Illuminate\http\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\BukutamuController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriKategoriController;

//Books
Route::post('/book', [BookController::class, 'create']);
Route::get('/book', [BookController::class, 'index']);
Route::put('/book/{id}', [BookController::class, 'update']);
Route::delete('/book/{id}', [BookController::class, 'destroy']);

//Racks
Route::post('/rack', [BookController::class, 'create']);
Route::get('/rack', [BookController::class, 'index']);
Route::put('/rack/{id}', [BookController::class, 'update']);
Route::delete('/rack/{id}', [BookController::class, 'destroy']);

//Bukutamu
Route::post('/bukutamu', [BukutamuController::class, 'create']);
Route::get('/bukutamu', [BukutamuController::class, 'index']);
Route::put('/bukutamu/{id}', [BukutamuController::class, 'update']);
Route::delete('/bukutamu/{id}', [BukutamuController::class, 'destroy']);

//Artikel
Route::post('/artikel', [ArtikelController::class, 'create']);
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

//Galeri
Route::post('/galeri', [GaleriController::class, 'create']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::put('/galeri/{id}', [GaleriController::class, 'update']);
Route::delete('/galeri/{id}', [GaleriController::class, 'destroy']);

//GaleriKategori
Route::post('/galerikategori', [GaleriKategoriController::class, 'create']);
Route::get('/galerikategori', [GaleriKategoriController::class, 'index']);
Route::put('/galerikategori/{id}', [GaleriKategoriController::class, 'update']);
Route::delete('/galerikategori/{id}', [GaleriKategoriController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});