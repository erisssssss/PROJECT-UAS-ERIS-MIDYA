<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrgmController;
use App\Http\Controllers\BgrkController;
use App\Http\Controllers\StokController;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/barang_masuk', [BrgmController::class, 'index']);
Route::get('/barang_masuk/form/', [BrgmController::class, 'create']);
Route::post('/barang_masuk/store/', [BrgmController::class, 'store']);
Route::get('/barang_masuk/edit/{id}', [BrgmController::class, 'edit']);
Route::put('/barang_masuk/{id}', [BrgmController::class, 'update']);
Route::delete('/barang_masuk/{id}', [BrgmController::class, 'destroy']);

Route::get('/barang_keluar', [BgrkController::class, 'index']);
Route::get('/barang_keluar/form/', [BgrkController::class, 'create']);
Route::post('/barang_keluar/store/', [BgrkController::class, 'store']);
Route::get('/barang_keluar/edit/{id}', [BgrkController::class, 'edit']);
Route::put('/barang_keluar/{id}', [BgrkController::class, 'update']);
Route::delete('/barang_keluar/{id}', [BgrkController::class, 'destroy']);

Route::get('/stok', [StokController::class, 'index']);

