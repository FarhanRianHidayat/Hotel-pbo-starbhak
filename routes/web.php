<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

route::get('/kamar',[KamarController::class,'index'])->name('kamar');
route::get('/kamar/create',[KamarController::class,'create']);
route::post('/kamar',[KamarController::class,'store']);
route::get('/kamar/{id}/edit',[KamarController::class,'edit']);
route::post('/kamar/{id}',[KamarController::class,'update']);
route::get('/kamar/{id}',[KamarController::class,'destroy']);
