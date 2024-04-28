<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;


Route::resource('/recettes', RecetteController::class);


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/recettes/{recette}', [RecetteController::class, 'show'])->name('recettes.show');

Route::post('/recettes/store', [RecetteController::class, 'store'])->name('recettes.store');

Route::get('/recette', function () {
    return view('recette');
})->name('recette');


