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
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/banquet', function () {
    return view('banquet');
})->name('banquet');

Route::get('/wedding-promotion', function () {
    return view('wedding-promotion');
})->name('wedding-promotion');

Route::get('/conference-room', function () {
    return view('conference-room');
})->name('conference-room');

Route::get('/banquet-kim-hoang-long', function () {
    return view('banquet-kim-hoang-long');
})->name('banquet-kim-hoang-long');

Route::get('/banquet-ngan-sen', function () {
    return view('banquet-ngan-sen');
})->name('banquet-ngan-sen');

Route::get('/banquet-hoang-kim-sen', function () {
    return view('banquet-hoang-kim-sen');
})->name('banquet-hoang-kim-sen');

Route::get('/banquet-thanh-sen', function () {
    return view('banquet-thanh-sen');
})->name('banquet-thanh-sen');