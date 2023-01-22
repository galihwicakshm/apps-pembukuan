<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BulanController;
use App\Http\Controllers\PembukuanController;

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

Route::resource('/pelanggan', UserController::class);
Route::resource('/pembukuan', PembukuanController::class);
Route::get('/data/{id}', [DataController::class, 'showData']);
Route::get('/show', [DataController::class, 'show']);
Route::get('/bulan', [BulanController::class, 'index']);
Route::post('/bulan/store', [BulanController::class, 'store']);
