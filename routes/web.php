<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuggyflixController;
use App\Http\Controllers\PersonsController;

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

Route::get('buggyflix/create/acteur', 
[PersonsController::class, 'createActeur'])->name('buggyflix.create.acteur');

Route::get('buggyflix/create/producteur', 
[PersonsController::class, 'createProducteur'])->name('buggyflix.create.producteur');

Route::get('buggyflix/create/realisateur', 
[PersonsController::class, 'createRealisateur'])->name('buggyflix.create.realisateur');

Route::post('/persons', 
[PersonsController::class, 'store'])->name('persons.store');

Route::post('/acteurs', 
[PersonsController::class, 'store'])->name('acteurs.store');

Route::get('buggyflix/person', [PersonsController::class, 'index'])->name('buggyflix.person');

Route::get('buggyflix/person/{person}', 
[PersonsController::class, 'zoom'])->name('buggyflix.zoom');

Route::get('buggyflix/cinemographie/{person}', 
[PersonsController::class, 'acteur'])->name('buggyflix.cinemographie');

Route::post('buggyflix/create/film',
[BuggyflixController::class, 'store'])->name('buggyflix.store');

Route::delete('buggyflix/cinemographie/{id}', 
[PersonsController::class, 'destroy'])->name('persons.destroy');
