<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return 'Welcome to our website!';
});

Route::get('/', function () {
    return view('home', [
        'appName' => 'Offline Lost and Found',
        'tagline' => 'Find what you <strong>lost</strong>. Return what you <strong>found</strong>.',
    ]);
});

Route::get('/user/{name}', function (string $name) {
    return view('greeting', ['name' => $name]);
});