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
    $data = ['comics' => config('comics')];
    return view('guest.home', $data);
})->name('home');

Route::get('/characters', function () {
     $data = ['comics' => config('comics')];
    return view('guest.characters', $data);
})->name('characters');

Route::get('/movies', function () {
     $data = ['comics' => config('comics')];
    return view('guest.movies', $data);
})->name('movies');

Route::get('/product', function () {
     $data = ['comics' => config('comics')];
    return view('guest.product', $data);
})->name('product');
