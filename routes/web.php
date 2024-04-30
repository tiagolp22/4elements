<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetteController;


Route::resource('/recettes', RecetteController::class);
Route::get('/', [RecetteController::class, 'index']);
