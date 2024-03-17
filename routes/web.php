<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

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

// Route Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Route Comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route per la creazione
Route::get('comics/create', [ComicController::class, 'create'])->name('comics.create');
// Route Comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
// Rotta per il salvataggio
Route::post('/comics', [ComicController::class, 'store'])->name('teams.store');

// Route Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
