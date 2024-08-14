<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use laravel\sanctum\HasApiTokens;
use App\Http\Controllers\api\ProductApiController;
use App\Http\Controllers\api\AuthApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('/products',ProductApiController::class);

Route::post('/register', [AuthApiController::class, 'createUser']);
Route::post('/login', [AuthApiController::class, 'loginUser']);
