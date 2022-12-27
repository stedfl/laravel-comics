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
    $comics = config('db.comics');
    $menuBuy = config('db.menuBuy');
    return view('home', compact('comics', 'menuBuy'));
})->name('home');

Route::get('/character-details/{id}', function($id) {
    $comics = config('db.comics'); 
    $comic_filtered = array_filter($comics, fn($item) => $item['id'] == $id);
    $comic_get = array_pop($comic_filtered);
    return view('characterCard', compact('comic_get'));
})->name('character-details');

Route::get('/characters', function() {
    return view('characters');
})->name('characters');

Route::get('/movies', function() {
    return view('movies');
})->name('movies');

Route::get('/tv', function() {
    return view('tv');
})->name('tv');

Route::get('/games', function() {
    return view('games');
})->name('games');

Route::get('/collectibles', function() {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function() {
    return view('videos');
})->name('videos');

Route::get('/fans', function() {
    return view('fans');
})->name('fans');

Route::get('/news', function() {
    return view('news');
})->name('news');

Route::get('/shop', function() {
    return view('shop');
})->name('shop');
