<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', fn() => view('pages.home'))->name('home');
Route::get('/generic', fn() => view('pages.generic'))->name('generic');
Route::get('/elements', fn() => view('pages.elements'))->name('elements');