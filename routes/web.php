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

    $comics = config('comics');

    $data = [
        'comics' => $comics, 
        // 'nav' => [
        //     [
        //     'link'=> 'characters',
        //     'text'=> 'characters'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'comics'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'movies'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'tv'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'games'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'collectibles'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'videos'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'fans'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'news'
        //     ],
        //     [
        //     'link'=> '#',
        //     'text'=> 'shop'
        //     ]
        // ],
    ];

    return view('guest.home', $data);
})->name('home');

Route::get('/{id}', function ($id) {
    $comics = collect(config('comics'));

    $selectedComic = $comics->firstwhere('id', $id);
    if ($selectedComic === null) abort(404);
    
    return view('guest.product', [
        'title' => $selectedComic['title'] . ' - DCcomics',
        'product' => $selectedComic
    ]);
    // $selectedComic = $comics->where('id', $id);
    // return view('guest.product');
})->name('product');

Route::get('/comics', function () {
    return view('guest.comics');
})->name('comics');

Route::get('/characters', function () {
    return view('guest.characters');
})->name('characters');
