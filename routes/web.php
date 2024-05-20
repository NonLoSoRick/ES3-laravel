<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::resource('libri', LibroController::class);
