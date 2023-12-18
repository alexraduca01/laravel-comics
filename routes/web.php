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
    $content = config('navcontent.navcontent');
    $header = config('headercontent.headercontent');
    return view('home', compact('comics'), compact('content'), compact('header'));
})->name('home');

Route::get('/characters', function () {
    $comics = config('db.comics');
    $content = config('navcontent.navcontent');
    $header = config('headercontent.headercontent');
    return view('pages.characters', compact('comics'), compact('content'), compact('header'));
})->name('characters');
