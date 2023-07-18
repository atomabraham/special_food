<?php

use App\Http\Controllers\CommandsController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\UsersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//la route qui appelle les méthodes du controlleur
Route::apiResource('users',UsersController::class);
Route::apiResource('menus',MenusController::class);
Route::apiResource('commands',CommandsController::class);