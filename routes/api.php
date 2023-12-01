<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('RandomMovieList', [MovieController::class, 'RandomMovieList'])->name('MovieController.RandomMovieList');
Route::get('WLetterMovieList', [MovieController::class, 'WLetterMovieList'])->name('MovieController.WLetterMovieList');
Route::get('LongerTitlesMovieList', [MovieController::class, 'LongerTitlesMovieList'])->name('MovieController.LongerTitlesMovieList');

