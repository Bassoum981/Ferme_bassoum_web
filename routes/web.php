<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::view('/notre-ferme', 'ferme')->name('ferme');
Route::view('/nos-produits', 'produits')->name('produits');
Route::view('/nos-animaux', 'animaux')->name('animaux');
Route::view('/contact', 'contact')->name('contact');
