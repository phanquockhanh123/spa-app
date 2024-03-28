<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/categories/index', function () {
    return view('frontend.pages.categories.index');
});



