<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\vulnerabilityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('category', CategoryController::class);
Route::resource('vulnerability', vulnerabilityController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

