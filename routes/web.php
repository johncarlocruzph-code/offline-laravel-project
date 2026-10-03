<?php

use App\Http\Controllers\ItemController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{id}', [ItemController::class, 'show']);