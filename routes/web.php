<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;


Route::resource('/recettes', RecetteController::class);
Route::get('/', [RecetteController::class, 'index']);

// Route::get('/form', function () {

//     return view('form');
// })->name('form');


// Route::post('/form',  [RecetteController::class, 'store'])->name('recette.store');


// Route::get('/recette', function () {
//     return view('recette');
// })->name('recette');

// Route::get('/recettes/{recette}/edit', [RecetteController::class, 'edit'])->name('recettes.edit');
// Route::post('/recettes/{recette}/edit', [RecetteController::class, 'update'])->name('recettes.update');
// Route::get('/recettes/{recette}', [RecetteController::class, 'show'])->name('recettes.show');
// Route::post('/recettes/store', [RecetteController::class, 'store'])->name('recettes.store');
