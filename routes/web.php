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
    /* $data = [
        "comics" => config('comics')
    ]; */
    return view('comics');
}) -> name('comics');

Route::get('/{index}', function ($index) {
    $data =  config('comics');
    if( is_numeric($index) && $index >= 0 && $index < count($data)){
        return view('comics-detail' , ["comicsBook"  => $data[$index]]);
    } else {
        abort(404);
    }

}) -> name ('comics-detail');


Route::get('/characters', function () {
    return view('characters');
}) -> name('characters');

Route::get('/movies', function () {
    return view('movies');
}) -> name('movies');

Route::get('/games', function () {
    return view('games');
}) -> name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
}) -> name('collectibles');

Route::get('/videos', function () {
    return view('videos');
}) -> name('videos');

Route::get('/fans', function () {
    return view('fans');
}) -> name('fans');

Route::get('/news', function () {
    return view('news');
}) -> name('news');

Route::get('/shop', function () {
    return view('shop');
}) -> name('shop');

Route::get('/tv', function () {
    return view('tv');
}) -> name('tv');

