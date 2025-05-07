<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/generic', [PageController::class, 'generic'])->name('generic');
Route::get('/elements', [PageController::class, 'elements'])->name('elements');