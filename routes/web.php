<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penarikanController;
use App\Http\Controllers\pencatatanController;
use App\Http\Controllers\dataAnggotaController;
use App\Http\Controllers\dataTabunganController;

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
    return redirect('/login');
});

// Route::resource('/penarikan', penarikanController::class)->middleware('auth');
// Route::resource('/pencatatan', pencatatanController::class)->middleware('auth');
Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [loginController::class, 'auth'])->name('postlogin');
Route::post('/inputTabungan', [dataTabunganController::class, 'inputTabungan'])->middleware('auth');
Route::post('/ambilTabungan', [dataTabunganController::class, 'ambilTabungan'])->middleware('auth');
Route::resource('/dataanggota', dataAnggotaController::class)->middleware('auth');
Route::resource('/dataTabungan', dataTabunganController::class)->middleware('auth');
Route::resource('/histori', HistoriController::class)->middleware('auth');