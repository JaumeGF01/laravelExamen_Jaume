<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("libros",[LibroController::class, "libros.index"]);
// Route::get("libros/{id}",[LibroController::class, "libros.show"]);
Route::resource("/libros",LibroController::class);
Route::get("login",[LoginController::class, "loginForm"])->name("login");
Route::post("login", [LoginController::class, "login"]);
Route::get("logout",[LoginController::class, "logout"])->name("logout");