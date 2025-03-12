<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategorimotorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailPesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/kategorimotor', [KategorimotorController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/detailmotor', [DetailController::class, 'index']);
Route::get('/detailpesanan', [DetailPesananController::class, 'index']);
