<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostController::class, 'index']);

Route::post('/post', [PostController::class, 'store']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::put('/posts/{id}', [PostController::class, 'update']);

Route::delete('/posts/{id}', [PostController::class, 'destroy']);
