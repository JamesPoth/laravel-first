<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    dd('Now changed in a different way');
});

dd('this has fixed issue 1 - good job');