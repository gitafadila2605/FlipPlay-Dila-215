<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\UserController;

Route::apiResource('media', MediaController::class);

Route::post(
    '/users/{user}/collection/{medium}',
    [MediaController::class, 'addToCollection']
);

Route::get(
    '/users/{user}/collection',
    [MediaController::class, 'userCollection']
);

Route::delete(
    '/users/{user}/collection/{medium}',
    [MediaController::class, 'removeFromCollection']
);

Route::post('/users', [UserController::class, 'store']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);