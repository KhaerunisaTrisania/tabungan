<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penarikanController;
use App\Http\Controllers\pencatatanController;

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
    return view('layout.app');
});

Route::resource('/penarikan',penarikanController::class);
Route::resource('/pencatatan',pencatatanController::class);
Route::get('/dashboard',[dashboardController::class,'index']);
Route::get('/login',[loginController::class,'index']);