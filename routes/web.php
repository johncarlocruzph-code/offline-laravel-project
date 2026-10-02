<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return 'Welcome to our website!';
});

Route::get('/', function () {
    return 'Welcome to the Offline Lost and Found app!';
});

Route::get('/user/{name}', function (string $name) {
    return 'Hello ' . $name . '!';
});