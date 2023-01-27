<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\GestionUtilisateur;
use App\Http\Controllers\GestionEntreprise;
use App\Http\Controllers\GestionVehicule;
use App\Http\Controllers\GestionAgence;
use App\Http\Controllers\GestionAgences;
use App\Http\Controllers\Inscription;

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
});

Route::get("/connexion",[ConnexionController::class,"index"]);
Route::get("/queryToConnect",[ConnexionController::class,"connect"]);
Route::get("/inscription",[Inscription::class,"index"]);
Route::get("/inscription/load",[Inscription::class,"create"]);

Route::get("/gestion/utilisateur",[GestionUtilisateur::class,"index"]);
Route::get("/gestion/entreprise",[GestionEntreprise::class,"index"]);
Route::get("/gestion/vehicule",[GestionVehicule::class,"index"]);
Route::get("/gestion/agence",[GestionAgence::class,"index"]);
Route::get("/gestion/agences",[GestionAgences::class,"index"]);



