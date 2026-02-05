<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthTokenController;

Route::get('/test', function () {
    return response()->json([
        'message' => 'Backend is alive! 🐱🍜',
        'time' => now()->toDateTimeString(),
    ]);
});

Route::get('/menu', [MenuController::class, 'index']);

// ✅ Auth (token)
Route::post('/login', [AuthTokenController::class, 'login']);
Route::post('/register', [AuthTokenController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthTokenController::class, 'logout']);
    Route::get('/user', [AuthTokenController::class, 'me']);
});
