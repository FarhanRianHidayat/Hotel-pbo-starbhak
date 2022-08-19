<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\KamarController;
use App\Http\Controllers\Api\KategoriController;



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

Route::apiResource('/kamar', App\Http\Controllers\Api\KamarController::class);
Route::apiResource('/hotel', App\Http\Controllers\Api\HotelController::class);
Route::apiResource('/kategori', App\Http\Controllers\Api\KategoriController::class);
Route::apiResource('/fasilitaskamar', App\Http\Controllers\Api\FasilitasKamarController::class);