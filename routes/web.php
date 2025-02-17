<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('players.login');
});
Route::get('/dashboard', function () {
    return view('players.dashboard.index');
});
Route::get('/games', function () {
    return view('players.dashboard.index');
});
Route::get('/my-games', function () {
    return view('players.dashboard.index');
});
Route::get('/leaderboard', function () {
    return view('players.leaderboard.index');
});
Route::get('/info', function () {
    return view('players.dashboard.index');
});
Route::get('/profile', function () {
    return view('players.dashboard.index');
});
