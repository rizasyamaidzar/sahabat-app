<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('players.pages.dashboard.index');
});
Route::get('/games', function () {
    return view('players.pages.games.index');
});
Route::get('/my-games', function () {
    return view('players.pages.my-games.index');
});
Route::get('/my-games/{id}', function () {
    return view('players.pages.my-games.show');
});
Route::get('/leaderboard', function () {
    return view('players.pages.leaderboard.index');
});
Route::get('/leaderboard/{id}', function () {
    return view('players.pages.leaderboard.show');
});
Route::get('/info', function () {
    return view('players.pages.dashboard.index');
});
Route::get('/profile', function () {
    return view('players.pages.profile.index');
});


Route::get('/coach.dashboard', function () {
    return view('coach.pages.dashboard.index');
});
Route::get('/coach.programs', function () {
    return view('coach.pages.program.index');
});
