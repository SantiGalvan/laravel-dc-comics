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
// Route per la modifica
Route::get('comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

// Rotta per il salvataggio
Route::put('comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// Rotta per il salvataggio
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Route Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
