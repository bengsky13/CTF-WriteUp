<?php

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

Route::apiResource('/portal_login', App\Http\Controllers\Api\LoginController::class);
Route::apiResource('/portal_register', App\Http\Controllers\Api\RegisterController::class);

// Route::group([
// 	'middleware' => 'api',
// 	'prefix' => 'auth'
// ], function ($router) {

// 	Route::post('login', 'App\Http\Controllers\Api\LoginController::class@login');

// });