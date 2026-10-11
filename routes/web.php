<?php

use App\Http\Controllers\ItemController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'appName' => 'Offline Lost and Found',
        'tagline' => 'Find what you <strong>lost</strong>. Return what you <strong>found</strong>.',
        'items' => Item::all(),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/status/{status}', [ItemController::class, 'filter']);
Route::get('/items/create', [ItemController::class, 'create']);
Route::post('/items', [ItemController::class, 'store']);
Route::get('/items/{id}', [ItemController::class, 'show']);
Route::get('/items/{id}/edit', [ItemController::class, 'edit']);
Route::put('/items/{id}', [ItemController::class, 'update']);
Route::delete('/items/{id}', [ItemController::class, 'destroy']);