<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\RecetteController;


Route::prefix("/")->resource('/', RecetteController::class);
Route::get('/receitas/{recette}', 'RecetteController@show')->name('recette.show');

Route::get('/form', function () {
    return view('form');
})->name("form");

Route::get('/recette', function () {
    return view('recette');
})->name("recette");
