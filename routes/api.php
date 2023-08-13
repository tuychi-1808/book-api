<?php

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

Route::resources([
    '/journals'=>\App\Http\Controllers\Api\JournalController::class
]);

Route::resources([
    '/authors'=>\App\Http\Controllers\Api\AuthorController::class
]);

Route::resources([
    '/articles'=>\App\Http\Controllers\Api\ArticleController::class
]);
