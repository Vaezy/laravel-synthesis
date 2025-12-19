<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animaux')->group(function () {
    Route::get('/ajouter', [AnimalController::class, 'create'])->name('animals.create');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animals.show');
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('animals.update');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
});

Route::fallback(function () {
    return view('errors.not-found');
});
