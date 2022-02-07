<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/index', [AuthController::class, 'index']);
    Route::get('/indexAdmin', [AuthController::class, 'indexAdmin']);
});

Route::post('/login', [AuthController::class, 'login']);