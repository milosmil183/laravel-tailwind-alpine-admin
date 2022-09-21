<?php

use App\Http\Controllers\Api\AuthController;
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

Route::prefix('auth')->group(function () {
  Route::get('/user', function (Request $request) {
    return $request->user();
  })->middleware('auth:sanctum');
  Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
  Route::post('/register', [AuthController::class, 'register'])->middleware('guest');
  Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});
