<?php

use Illuminate\Support\Facades\Route;

// List Backend Routes

Route::prefix('admins')->group(function () {
    Route::get('/', function () {
        return view('backend.dashboard');
    });

    Route::get('/login', function () {
        return view('backend.pages.auth.login');
    });

    Route::get('/products/index', function () {
        return view('backend.pages.products.index');
    });

    Route::get('/products/create', function () {
        return view('backend.pages.products.create');
    });
});




// List Frontend Routes

Route::get('/', function () {
    return view('frontend.dashboard');
});

Route::get('/categories/index', function () {
    return view('frontend.pages.categories.index');
});

Route::get('/products/index', function () {
    return view('frontend.pages.products.index');
});

Route::get('/blogs/index', function () {
    return view('frontend.pages.blogs.index');
});

Route::get('/contacts/index', function () {
    return view('frontend.pages.contacts.index');
});

Route::get('/wishlists/index', function () {
    return view('frontend.pages.wishlists.index');
});

Route::get('/carts/index', function () {
    return view('frontend.pages.carts.index');
});

Route::get('/checkouts/index', function () {
    return view('frontend.pages.checkouts.index');
});
