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

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', function () {
    return view('comics');
})->name('comics');


Route::get('/movies', function () {
    return view('movies');
})->name('movies');


Route::get('/games', function () {
    return view('games');
})->name('games');


Route::get('/fans', function () {
    return view('fans');
})->name('fans');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');


Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');


Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/tv', function () {
    return view('tv');
})->name('tv');


Route::get('/videos', function () {
    return view('videos');
})->name('videos');
