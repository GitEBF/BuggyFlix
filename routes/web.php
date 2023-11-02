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

Route::post('/acteurs', 
[PersonsController::class, 'store'])->name('acteurs.store');

Route::get('buggyflix/person', [PersonsController::class, 'index'])->name('buggyflix.person');

Route::get('buggyflix/person/{person}', 
[PersonsController::class, 'zoom'])->name('buggyflix.zoom');

Route::get('buggyflix/cinemographie/{person}', 
[PersonsController::class, 'acteur'])->name('buggyflix.cinemographie');