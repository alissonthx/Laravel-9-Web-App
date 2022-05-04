<?php

use App\Http\Controllers\ClassificationsController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\StandingsController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/teams', [TeamsController::class, 'index']);
Route::post('/teams', [TeamsController::class, 'store']);
Route::get('/', [StandingsController::class, 'index']);
Route::get('/classificacao', [ClassificationsController::class, 'index']);
Route::get('/partidas', [GamesController::class, 'index']);
