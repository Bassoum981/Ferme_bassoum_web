<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/notre-ferme', 'ferme')->name('ferme');
Route::view('/nos-produits', 'produits')->name('produits');
Route::view('/nos-animaux', 'animaux')->name('animaux');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
