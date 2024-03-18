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

// Rotta per il cestino
Route::get('/comics/trash', [ComicController::class, 'trash'])->name('comics.trash');
// Rotta per il restore degli elementi cestinati
Route::patch('/comics/{comics}/restore', [ComicController::class, 'restore'])->name('comics.restore');
// Rotta per la cancellazione definitiva
Route::delete('/comics/{comic}/drop', [ComicController::class, 'drop'])->name('comics.drop');



// Route Comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route per la creazione
Route::get('comics/create', [ComicController::class, 'create'])->name('comics.create');
// Route Comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show')->withTrashed();
// Route per la modifica
Route::get('comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit')->withTrashed();

// Rotta per il salvataggio
Route::put('comics/{comic}', [ComicController::class, 'update'])->name('comics.update')->withTrashed();

// Rotta per il salvataggio
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// Rotta per la cancellazione 
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

// Rotta generica, crea tutte le rotte senza doverle farle a mano
// Route::resource('comics', ComicController::class);



// Route Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
