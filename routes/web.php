<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuggyflixController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\UsagersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/buggyflix', 
[BuggyflixController::class, 'index'])->name('buggyflix.index');

Route::get('buggyflix/film/{film}', 
[BuggyflixController::class, 'show'])->name('buggyflix.show');

Route::get('buggyflix/create/film', 
[BuggyflixController::class, 'create'])->name('buggyflix.create.film');

Route::get('buggyflix/create/person', 
[PersonsController::class, 'create'])->name('buggyflix.create.person');

Route::get('buggyflix/edit/{person}', 
[PersonsController::class, 'edit'])->name('buggyflix.edit.person');

Route::get('buggyflix/create/acteur', 
[PersonsController::class, 'createActeur'])->name('buggyflix.create.acteur');

Route::get('buggyflix/create/producteur', 
[PersonsController::class, 'createProducteur'])->name('buggyflix.create.producteur');

Route::get('buggyflix/create/realisateur', 
[PersonsController::class, 'createRealisateur'])->name('buggyflix.create.realisateur');

Route::post('/persons', 
[PersonsController::class, 'store'])->name('persons.store');

Route::patch('/buggyflix/persons/{person}/modifier', 
[PersonsController::class, 'update'])->name('persons.update');

Route::post('/acteurs', 
[PersonsController::class, 'storeActeur'])->name('acteurs.store');

Route::post('/producteurs', 
[PersonsController::class, 'storeProducteur'])->name('producteurs.store');

Route::post('/realisateurs', 
[PersonsController::class, 'storeRealisateur'])->name('realisateurs.store');

Route::get('buggyflix/person', [PersonsController::class, 'index'])->name('buggyflix.person');

Route::get('buggyflix/person/{person}', 
[PersonsController::class, 'zoom'])->name('buggyflix.zoom');

Route::get('buggyflix/cinemographie/{person}', 
[PersonsController::class, 'acteur'])->name('buggyflix.cinemographie');

Route::post('buggyflix/create/film',
[BuggyflixController::class, 'store'])->name('buggyflix.store');

Route::delete('/persons/{id}', 
[PersonsController::class, 'destroy'])->name('persons.destroy');

Route::delete('/acteurs/{id}', 
[PersonsController::class, 'destroyActeur'])->name('acteurs.destroy');

Route::delete('/producteurs/{id}', 
[PersonsController::class, 'destroyProducteur'])->name('producteurs.destroy');

Route::delete('/realisateurs/{id}', 
[PersonsController::class, 'destroyRealisateur'])->name('realisateurs.destroy');

// Usagers
Route::get('buggyflix/login', 
[UsagersController::class, 'showLoginForm'])->name('UsagersController.showLoginForm');

Route::post('buggyflix/login',
[UsagersController::class, 'login'])->name('UsagersController.login');

Route::get('buggyflix/logout', 
[UsagersController::class, 'logout'])->name('UsagersController.logout');

// Films
Route::delete('buggyflix/film/{id}', 
[BuggyflixController::class, 'destroy'])->name('film.destroy');

Route::get('buggyflix/edit/film/{film}', 
[BuggyflixController::class, 'edit'])->name('buggyflix.edit.film');

Route::patch('/buggyflix/film/{film}/modifier', 
[BuggyflixController::class, 'update'])->name('buggyflix.update');