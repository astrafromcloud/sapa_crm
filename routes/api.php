<?php

use App\Http\Controllers\Subject\DeleteController;
use App\Http\Controllers\Subject\IndexController;
use App\Http\Controllers\Subject\ShowController;
use App\Http\Controllers\Subject\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subject\StoreController;


Route::get('/subjects', IndexController::class);
Route::post('/subjects', StoreController::class);
Route::patch('/subjects/{subject}/edit', UpdateController::class);
Route::get('/subjects/{subject}/edit', ShowController::class);
Route::delete('/subjects/{subject}', DeleteController::class);
