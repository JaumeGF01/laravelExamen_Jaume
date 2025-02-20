<?php

use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("libros",[LibroController::class, "libros.index"]);
// Route::get("libros/{id}",[LibroController::class, "libros.show"]);
Route::resource("libros",LibroController::class);