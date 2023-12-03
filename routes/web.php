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

Route::get('/fotogaleria', function () {
    return view('fotogaleria');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/kurzy', function () {
    return view('kurzy');
});

Route::get('/osobny_automobil', function () {
    return view('osobny_automobil');
});

Route::get('/prihlasenie', function () {
    return view('prihlasenie');
});
