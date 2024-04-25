<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// Route::get('/', [RecetteController::class, 'index']);

Route::get('/form', function () {
    return view('form');
})->name("form");

Route::get('/recette', function () {
    return view('recette');
})->name("recette");
