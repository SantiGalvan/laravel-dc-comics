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
    $comics = config('comics');
    return view('home', compact('comics'));
})->name('home');

// Route Comic
Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    return view('comic', ['comic' => $comics[$index]]);
})->name('comic');

// Route Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');
