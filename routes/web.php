<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecetteController;


Route::prefix("/")->resource('/', RecetteController::class);

Route::get('/form', function () {
    return view('form');
})->name("form");

Route::get('/recette', function () {
    return view('recette');
})->name("recette");
