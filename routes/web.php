<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics', compact('comics'));
})->name('comics');

Route::get('/character', function () {
    return view('character');
})->name('character');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');