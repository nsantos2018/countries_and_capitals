<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// start Game
Route::get('/', [MainController::class, 'startGame'])->name('start_game');
Route::post('/', [MainController::class, 'prepareGame'])->name('prepare_game');



/*
Route::get('/', function () {
    echo "hello!";
});

Route::view('/', 'home');
Route::get('/show_data', [MainController::class, 'showData']);
*/