<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('players.home.index');
});
