<?php

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
Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');

// Route Comic
Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    return view('comics.show', ['comic' => $comics[$index]]);
})->name('comics.show');

// Route Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
