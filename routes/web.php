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
    $content = config('navcontent.navcontent');
    $header = config('headerdb.headercontent');
    $comicsContent = config('footercontent.dcComics');
    $dc = config('footercontent.dc');
    $sites = config('footercontent.sites');
    return view('home', compact('content', 'header', 'comicsContent', 'dc', 'sites'));
})->name('home');

Route::get('/characters', function () {
    $comics = config('db.comics');
    $content = config('navcontent.navcontent');
    $header = config('headerdb.headercontent');
    $comicsContent = config('footercontent.dcComics');
    $dc = config('footercontent.dc');
    $sites = config('footercontent.sites');
    return view('pages.characters', compact('comics', 'content', 'header', 'comicsContent', 'dc', 'sites'));
})->name('characters');

Route::get('/comics', function () {
    $comics = config('db.comics');
    $content = config('navcontent.navcontent');
    $header = config('headerdb.headercontent');
    $comicsContent = config('footercontent.dcComics');
    $dc = config('footercontent.dc');
    $sites = config('footercontent.sites');
    return view('comics.index', compact('comics', 'content', 'header', 'comicsContent', 'dc', 'sites'));
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    $comic = null;
    $content = config('navcontent.navcontent');
    $header = config('headerdb.headercontent');
    $comicsContent = config('footercontent.dcComics');
    $dc = config('footercontent.dc');
    $sites = config('footercontent.sites');
    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }
    if ($comic) {
        return view('comics.show', compact('comics', 'comic','content', 'header', 'comicsContent', 'dc', 'sites'));
    } else {
        abort(404);
    }
})->name('comics.show');
