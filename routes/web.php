<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//Rotta get per la vista dell'annuncio
    Route::get('/create/ad',[AdController::class,"create"] )->name("create.ad");
