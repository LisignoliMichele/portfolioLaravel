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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('portfolio.index');
})->name('portfolio');;

Route::resource('/visitor', 'VisitorController');

Route::get('/thankyou', function () {
    return view('portfolio.thanks');
})->name('thanks');

Route::get('/boolflix', function () {
    return view('boolflix.index');
})->name('boolflix');

Route::get('/boolzapp', function () {
    return view('boolzapp.index');
})->name('boolzapp');

Route::get('/digitalocean', function () {
    return view('digitalocean.index');
})->name('digitalocean');

Route::get('/artist', function () {
    return view('artist.index');
})->name('artist');

Route::get('/hubspot', function () {
    return view('hubspot.index');
})->name('hubspot');

Route::get('/helbiz', function () {
    return view('helbiz.index');
})->name('helbiz');

Route::get('/spotify', function () {
    return view('spotify.index');
})->name('spotify');