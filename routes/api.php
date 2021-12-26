<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProgressImageController;
use App\Http\Controllers\WeeklyAnswersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/messages', [MessagesController::class, 'index']);
Route::post('/messages', [MessagesController::class, 'store']);

Route::post('/progress-images', [ProgressImageController::class, 'store']);

Route::post('/weekly-answers', [WeeklyAnswersController::class, 'store']);
