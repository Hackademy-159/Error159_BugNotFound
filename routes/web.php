<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

//rotta per la homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
//Rotta get per la vista dell'annuncio
Route::get('/create/ad',[AdController::class,'create'] )->name('create.ad');
//Rotta per l'indice degli articoli
Route::get('/ad/index', [AdController::class, 'index'])->name('ad.index');
//rotta dettaglio annuncio
Route::get("/show/ad/{ad}",[AdController::class,'show'])->name('ad.show');
//rotta vista per categoria specifica
Route::get('/category/{category}',[AdController::class,'byCategory'])->name('byCategory');
//rotta per l'indice annunci da revisionare
Route::get('/revisor/index',[RevisorController::class,'index'])->name('revisor.index');
//rotta per accettare l'annuncio
Route::patch('/accept/{ad}' , [RevisorController::class, 'accept'])->name('accept'); //1sor·Controller' , 1ccqit ì l(crpt \,
//rotta per rifiutare l'annuncio
Route::patch('/reject/{ad}' , [RevisorController::class, 'reject'])->name('reject'); //1sor·Controller' , 1ccqit ì l(crpt \,
//rotta per mostrare indice dei prodottti da revisionare
Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');