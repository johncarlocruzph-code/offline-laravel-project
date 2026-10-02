<?php

use Illuminate\Support\Facades\Route;

// Basic routes
Route::get('/welcome', function () {
    return 'Welcome to our website!';
});

Route::get('/', function () {
    return 'Welcome to Home';
});

// Route with a parameter
Route::get('/user/{name}', function (string $name) {
    return "Welcome back user {$name}";
});