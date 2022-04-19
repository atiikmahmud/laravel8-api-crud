<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/posts', [PostController::class, 'index']);

    Route::post('/post', [PostController::class, 'store']);

    Route::get('/posts/{id}', [PostController::class, 'show']);

    Route::put('/posts/{id}', [PostController::class, 'update']);

    Route::delete('/posts/{id}', [PostController::class, 'destroy']);

    Route::get('/students', [StudentController::class, 'index']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
