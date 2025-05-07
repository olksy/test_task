<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/generic', [PageController::class, 'generic'])->name('generic');
Route::get('/elements', [PageController::class, 'elements'])->name('elements');

Route::get('/users', [UsersController::class, 'index'])->name('pages.users.index');
Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('pages.users.edit');
Route::put('/users/{user}', [UsersController::class, 'update'])->name('pages.users.update');
Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('pages.users.destroy');