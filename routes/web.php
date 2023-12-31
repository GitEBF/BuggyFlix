<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuggyflixController;
use App\Http\Controllers\PersonsController;
use App\Http\Controllers\UsagersController;
use App\Http\Middleware\CheckRole;
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

Route::get('/', function () {
    return redirect('/buggyflix');
});


Route::get('/buggyflix', 
[BuggyflixController::class, 'index'])->name('buggyflix.index')->middleware('CheckRole:1,2,3');

Route::get('buggyflix/film/{film}', 
[BuggyflixController::class, 'show'])->name('buggyflix.show')->middleware('CheckRole:1,2,3');

Route::get('buggyflix/create/film', 
[BuggyflixController::class, 'create'])->name('buggyflix.create.film')->middleware('CheckRole:1');

Route::get('buggyflix/films', 
[BuggyflixController::class, 'showAll'])->name('buggyflix.films')->middleware('CheckRole:1,2,3');

Route::get('buggyflix/create/person', 
[PersonsController::class, 'create'])->name('buggyflix.create.person')->middleware('CheckRole:1');

Route::get('buggyflix/edit/{person}', 
[PersonsController::class, 'edit'])->name('buggyflix.edit.person')->middleware('CheckRole:1');

Route::get('buggyflix/create/acteur/{film}', 
[PersonsController::class, 'createActeur'])->name('buggyflix.create.acteur')->middleware('CheckRole:1');

Route::get('buggyflix/create/producteur/{film}', 
[PersonsController::class, 'createProducteur'])->name('buggyflix.create.producteur')->middleware('CheckRole:1');

Route::get('buggyflix/create/realisateur/{film}', 
[PersonsController::class, 'createRealisateur'])->name('buggyflix.create.realisateur')->middleware('CheckRole:1');

Route::get('buggyflix/create/genre/{film}', 
[BuggyflixController::class, 'createGenre'])->name('buggyflix.create.genre')->middleware('CheckRole:1');

Route::post('/persons', 
[PersonsController::class, 'store'])->name('persons.store')->middleware('CheckRole:1');

Route::patch('/buggyflix/persons/{person}/modifier', 
[PersonsController::class, 'update'])->name('persons.update')->middleware('CheckRole:1');

Route::post('/acteurs', 
[PersonsController::class, 'storeActeur'])->name('acteurs.store')->middleware('CheckRole:1');

Route::post('/producteurs', 
[PersonsController::class, 'storeProducteur'])->name('producteurs.store')->middleware('CheckRole:1');

Route::post('/realisateurs', 
[PersonsController::class, 'storeRealisateur'])->name('realisateurs.store')->middleware('CheckRole:1');

Route::post('/genres', 
[BuggyflixController::class, 'storeGenre'])->name('genres.store')->middleware('CheckRole:1');

Route::get('buggyflix/person', [PersonsController::class, 'index'])->name('buggyflix.person')->middleware('CheckRole:1,2,3');

Route::get('buggyflix/cinemographie/{person}', 
[PersonsController::class, 'acteur'])->name('buggyflix.cinemographie')->middleware('CheckRole:1,2,3');

Route::post('buggyflix/create/film',
[BuggyflixController::class, 'store'])->name('buggyflix.store')->middleware('CheckRole:1');


Route::delete('/persons/{id}', 
[PersonsController::class, 'destroy'])->name('persons.destroy')->middleware('CheckRole:1');

Route::delete('/acteurs/{id}', 
[PersonsController::class, 'destroyActeur'])->name('acteurs.destroy')->middleware('CheckRole:1');

Route::delete('/producteurs/{id}', 
[PersonsController::class, 'destroyProducteur'])->name('producteurs.destroy')->middleware('CheckRole:1');

Route::delete('/realisateurs/{id}', 
[PersonsController::class, 'destroyRealisateur'])->name('realisateurs.destroy')->middleware('CheckRole:1');

// Usagers
Route::get('buggyflix/login', 
[UsagersController::class, 'showLoginForm'])->name('UsagersController.showLoginForm');

Route::post('buggyflix/login',
[UsagersController::class, 'login'])->name('UsagersController.login');

Route::get('buggyflix/logout', 
[UsagersController::class, 'logout'])->name('UsagersController.logout');

Route::post('buggyflix/signin', 
[UsagersController::class, 'store'])->name('UsagersController.store');

Route::get('buggyflix/signin', 
[UsagersController::class, 'showSignInForm'])->name('UsagersController.showSignInForm');

Route::get('buggyflix/admin', 
[UsagersController::class, 'admin'])->name('UsagersController.admin')->middleware('CheckRole:1');

Route::get('buggyflix/user/edit/{user}', 
[UsagersController::class, 'edit'])->name('UsagersController.user.edit')->middleware('CheckRole:1');

Route::patch('buggyflix/user/{user}/update', 
[UsagersController::class, 'update'])->name('UsagersController.update')->middleware('CheckRole:1');

Route::delete('delete/user/{id}', 
[UsagersController::class, 'destroy'])->name('user.destroy')->middleware('CheckRole:1');


// Films
Route::delete('delete/film/{id}', 
[BuggyflixController::class, 'destroy'])->name('film.destroy')->middleware('CheckRole:1');

Route::get('buggyflix/edit/film/{film}', 
[BuggyflixController::class, 'edit'])->name('buggyflix.edit.film')->middleware('CheckRole:1');

Route::patch('/buggyflix/film/{film}/modifier', 

[BuggyflixController::class, 'update'])->name('buggyflix.update')->middleware('CheckRole:1');

Route::get('/filmGenres/{id}', 
[BuggyflixController::class, 'destroyFilmGenre'])->name('filmGenres.destroy');
