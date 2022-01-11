<?php

use App\Http\Controllers\Api\BookablesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('bookables', [BookablesController::class, 'index']);
Route::get('bookables/{id}', [BookablesController::class, 'show']);
