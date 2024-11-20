<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    
});

Route::get('comments', function() {
    
});

dd('Now changed in a different way');
