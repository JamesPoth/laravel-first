<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    dd('Now changed in a different way');
});

Route::get('comments', function() {
    dd('Now changed in a another way');
});

Route::get('another change', function() {
    dd('This was cloned and now I want to push it back');
});