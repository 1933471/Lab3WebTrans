<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[\App\Http\Controllers\listeController::class,"TabDonnees"]);
Route::get('/ajout',[\App\Http\Controllers\ajoutController::class,"AfficherPageAjout"]);
Route::get('/produit/{id}',[\App\Http\Controllers\produitController::class,"AfficherPageProduit"]);
Route::get('/modification/{id}',[\App\Http\Controllers\modificationController::class,"AfficherPageModification"]);

Route::post('/ajout',[\App\Http\Controllers\ajoutController::class,"add"]);
Route::post('/modification/{id}',[\App\Http\Controllers\modificationController::class,"modifier"]);

