<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    return view('index');
})->name("index");

Route::get('/form', function () {
    return view('form');
})->name("form");

Route::get('/recette', function () {
    return view('recette');
})->name("recette");
