<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//Rotta get per la vista dell'annuncio
Route::get('/create/ad',[AdController::class,'create'] )->name('create.ad');
//Rotta per l'indice degli articoli
Route::get('/ad/index', [AdController::class, 'index'])->name('ad.index');
Route::get("/show/ad/{ad}",[AdController::class,'show'])->name('ad.show');
Route::get('/category/{category}',[AdController::class,'byCategory'])->name('byCategory');
