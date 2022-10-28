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

Route::apiResource('regions', \App\Http\Controllers\Api\RegionController::class);
Route::apiResource('districts', \App\Http\Controllers\Api\DistrictController::class);
Route::apiResource('objects', \App\Http\Controllers\Api\ObjectController::class);
