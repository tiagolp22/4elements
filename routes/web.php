<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;


Route::resource('/recettes', RecetteController::class);


Route::get('/form', function () {
    return view('form');
})->name('form');

Route::get('/recettes/{recette}', [RecetteController::class, 'show'])->name('recettes.show');

Route::post('/recettes/store', [RecetteController::class, 'store'])->name('recettes.store');

Route::post('/form', 'RecetteController@store')->name('recette.store');


Route::get('/recette', function () {
    return view('recette');
})->name('recette');

Route::get('/recettes/{recette}/edit', [RecetteController::class, 'edit'])->name('recettes.edit');

Route::put('/recettes/{recette}', [RecetteController::class, 'update'])->name('recettes.update');



