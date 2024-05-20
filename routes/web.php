<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/libri', [LibroController::class, 'index'])->name('libri.index');
Route::get('/libri/create', [LibroController::class, 'create'])->name('libri.create');
Route::post('/libri', [LibroController::class, 'store'])->name('libri.store');
Route::get('/libri/{id}', [LibroController::class, 'show'])->name('libri.show');
Route::get('/libri/{id}/edit', [LibroController::class, 'edit'])->name('libri.edit');
Route::put('/libri/{id}', [LibroController::class, 'update'])->name('libri.update');
Route::delete('/libri/{id}', [LibroController::class, 'destroy'])->name('libri.destroy');
