<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\AulaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AulaController::class,'index']);
Route::get('/save', [AulaController::class,'save']);
Route::get('/update', [AulaController::class,'update']);
