<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtelierController;
use App\Http\Controllers\ReparateurController;
use App\Http\Controllers\ReparationsController;

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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

 
Route::post("/enregistrer", [AtelierController::class, "enregistrer"])->name("enregistrer");

Route::get("/accueil",[AtelierController::class,"accueil"])->name("accueil");

Route::get("/liste_voiture", [AtelierController::class, "liste_voiture"])->name("liste_voiture");

Route::get("/supprimer_voiture/{id}", [AtelierController::class, "supprimer_voiture"])->name("supprimer_voiture");

Route::get("/modifier_voiture/{id}", [AtelierController::class, "modifier_voiture"])->name("modifier_voiture");

Route::post("/save_voiture'{id}", [AtelierController::class, "save_voiture"])->name("save_voiture");

Route::get("/Reparateur", [ReparateurController::class,"Reparateur"])->name("Reparateur");

Route::post("/soumettre", [ReparateurController::class,"soumettre"])->name("soumettre");

Route::get("liste_reparateur",[ReparateurController::class,"liste_reparateur"])->name("liste_reparateur");

Route::get("supprimer_reparateur/{id}" ,[ReparateurController::class,"supprimer_reparateur"])->name("supprimer_reparateur");

Route::get("modifier_reparateur/{id}",[ReparateurController::class,"modifier_reparateur"])->name("modifier_reparateur");

Route::post("save_reparateur'{id}", [ReparateurController::class,'save_reparateur'])->name('save_reparateur');

Route::get("/reparer",[ReparateurController::class,'reparer'])->name('reparer');