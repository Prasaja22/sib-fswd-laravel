<?php

use App\Http\Controllers\ProductApiController;
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


Route::get('/cars-api', [ProductApiController::class, 'index'] );
Route::post('/cars-api/add', [ProductApiController::class, 'store']);
Route::delete('/cars-api/delete/{id}', [ProductApiController::class, 'destroy']);
Route::get('/cars-api/{id}', [ProductApiController::class, 'show']);
Route::put('/cars-api/update/{id}', [ProductApiController::class, 'update']);
