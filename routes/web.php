<?php

use App\Http\Controllers\AdController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homapage');

//Rotta get per la vista dell'annuncio
Route::prefix('/ad')->name('ad.')->controller(AdController::class)->group(function () {
    Route::get('/create', "create")->name("create");
});
