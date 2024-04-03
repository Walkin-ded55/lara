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

Route::get(' /', function () {
    return view('index');
})->name('home');

Route::get('/Catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/Cartproduct', function () {
    return view('cartproduct');
})->name('cartproduct');
Route::get('/Cart', function () {
    return view('cart');
})->name('cart');
Route::get('/Aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/register', function () {
    return view('register');
})->name('register');