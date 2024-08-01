<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AulaController;
use \App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);
Route::get('/aulas', [AulaController::class,'index']);
Route::get('/save', [AulaController::class,'save']);
Route::get('/update', [AulaController::class,'update']);
