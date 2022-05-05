<?php

use Facade\Ignition\DumpRecorder\Dump;
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

    $data = [
        "comics" => config('comics')
    ];
    return view('home' , $data);
}) -> name ('home');

Route::get('/comics', function () {
    $data = [
        "comics" => config('comics')
    ];
    return view('guest.comics', $data);
}) -> name('comics');

Route::get('comics/{index}', function ($index) {
    $data =  config('comics');
    if( is_numeric($index) && $index >= 0 && $index < count($data)){
        return view('guest.comics-detail' , ["comicsBook"  => $data[$index]]);
    } else {
        abort(404);
    }

}) -> name ('comics-detail');


Route::get('/characters', function () {
    return view('guest.characters');
}) -> name('characters');

Route::get('/movies', function () {
    return view('guest.movies');
}) -> name('movies');

Route::get('/games', function () {
    return view('guest.games');
}) -> name('games');

Route::get('/collectibles', function () {
    return view('guest.collectibles');
}) -> name('collectibles');

Route::get('/videos', function () {
    return view('guest.videos');
}) -> name('videos');

Route::get('/fans', function () {
    return view('guest.fans');
}) -> name('fans');

Route::get('/news', function () {
    return view('guest.news');
}) -> name('news');

Route::get('/shop', function () {
    return view('guest.shop');
}) -> name('shop');

Route::get('/tv', function () {
    return view('guest.tv');
}) -> name('tv');

