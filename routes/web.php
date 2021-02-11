<?php

use App\Http\Controllers\AnimalController;
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

// Créer un nouveau projet laravel_crud_update_exo_1
// Créer une DB laravel_crud_update_exo_1
// Créer une table animal ( genre, age ) example : ours 8
// Créer une navigation ( Animals, New Animal)

// Afficher dans une view tous les animaux

// Une view pour ajouter de nouveaux animaux
// Chaque animal doit pouvoir être cliquable et ramener sur la page show de l'animal
// Dans la view de l'animal il doit y avoir un bouton Editer et un bouton supprimer
// La page edit de l'animal doit etre un formulaire pré rempli de toutes les données et doit comporter un bouton UPDATE qui met en application les nouvelles données

// welcome (liste de animaux)
// store (form pour ajouter)
// show (montrer un animal)
// edit (modifier l'animal)


Route::get('/', [AnimalController::class, 'index']);
Route::get('/create', [AnimalController::class, 'create']);
Route::post('/store-animal', [AnimalController::class, 'store']);
Route::get('/show-animal/{id}', [AnimalController::class, 'show']);
Route::get('/edit-animal/{id}', [AnimalController::class, 'edit']);
Route::post('/update-animal/{id}', [AnimalController::class, 'update']);
Route::post('/delete-animal/{id}', [AnimalController::class, 'destroy']);