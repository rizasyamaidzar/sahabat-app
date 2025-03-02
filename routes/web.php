<?php

use App\Http\Controllers\Coach\LeaderboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::middleware(['guest'])->group(function () {
    // Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});
Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::group(['middleware' => ['isCoach']], function () {
    // MOTHER ROLE
    Route::get('/coach.dashboard', function () {
        return view('coach.pages.generals.dashboard.index');
    });
});
Route::group(['middleware' => ['isPlayer']], function () {
    // MOTHER ROLE
    Route::get('/dashboard', function () {
        return view('players.pages.dashboard.index');
    });
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

// ROUTE COACH

Route::get('/coach.leaderboard', [LeaderboardController::class, 'index']);
Route::get('/coach.programs', function () {
    return view('coach.pages.program.index');
});

// error page
Route::fallback([LeaderboardController::class, 'error_page'])->name('error_page');
