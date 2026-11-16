<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieApiController;

// Route API TixNow (URL-nya akan otomatis diawali dengan /api)
Route::get('/movies', [MovieApiController::class, 'index']);
Route::get('/movies/{id}', [MovieApiController::class, 'show']);
