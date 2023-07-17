<?php

use App\Http\Controllers\PlayerApiController;
use App\Http\Controllers\TeamApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */
Route::post('team/create', [TeamApiController::class, 'store'])->name('team.create');
Route::get('/teams', [TeamApiController::class, 'index']);

Route::post('player/create', [PlayerApiController::class, 'store'])->name('player.create');
Route::get('/players', [PlayerApiController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
