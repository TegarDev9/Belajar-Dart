<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\pengembalianController;
use App\Http\Controllers\dpeminjamanController;
use App\Http\Controllers\dpengembalianController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// anggota
Route::get('/anggota', [anggotaController::class, 'index']);
Route::get('/createAnggota', [anggotaController::class, 'create']);
Route::post('/storeanggota', [anggotaController::class, 'store']);
Route::get('/editanggota/{id}', [anggotaController::class, 'edit']);
Route::post('/updateanggota/{id}', [anggotaController::class, 'update']);
Route::get('/deleteanggota/{id}', [anggotaController::class, 'destroy']);

// petugas
Route::get('/petugas', [petugasController::class, 'index']);
Route::get('/createpetugas', [petugasController::class, 'create']);
Route::post('/storepetugas', [petugasController::class, 'store']);
Route::get('/editpetugas/{id}', [petugasController::class, 'edit']);
Route::post('/updatepetugas/{id}', [petugasController::class, 'update']);
Route::get('/deletepetugas/{id}', [petugasController::class, 'destroy']);

// buku
Route::get('/buku', [bukuController::class, 'index']);
Route::get('/createbuku', [bukuController::class, 'create']);
Route::post('/storebuku', [bukuController::class, 'store']);
Route::get('/editbuku/{id}', [bukuController::class, 'edit']);
Route::post('/updatebuku/{id}', [bukuController::class, 'update']);
Route::get('/deletebuku/{id}', [bukuController::class, 'destroy']);

// peminjaman
Route::get('/peminjaman', [peminjamanController::class, 'index']);
Route::get('/createpeminjaman', [peminjamanController::class, 'create']);
Route::post('/storepeminjaman', [peminjamanController::class, 'store']);
Route::get('/editpeminjaman/{id}', [peminjamanController::class, 'edit']);
Route::post('/updatepeminjaman/{id}', [peminjamanController::class, 'update']);
Route::get('/deletepeminjaman/{id}', [peminjamanController::class, 'destroy']);

// pengembalian
Route::get('/pengembalian', [pengembalianController::class, 'index']);
Route::get('/createpengembalian', [pengembalianController::class, 'create']);
Route::post('/storepengembalian', [pengembalianController::class, 'store']);
Route::get('/editpengembalian/{id}', [pengembalianController::class, 'edit']);
Route::post('/updatepengembalian/{id}', [pengembalianController::class, 'update']);
Route::get('/deletepengembalian/{id}', [pengembalianController::class, 'destroy']);

// detailpeminjaman
Route::get('/dpeminjaman', [dpeminjamanController::class, 'index']);
Route::get('/createdpeminjaman', [dpeminjamanController::class, 'create']);
Route::post('/storedpeminjaman', [dpeminjamanController::class, 'store']);
Route::get('/editdpeminjaman/{id}', [dpeminjamanController::class, 'edit']);
Route::post('/updatedpeminjaman/{id}', [dpeminjamanController::class, 'update']);
Route::get('/deletedpeminjaman/{id}', [dpeminjamanController::class, 'destroy']);


// detailpengembalian
Route::get('/dpengembalian', [dpengembalianController::class, 'index']);
Route::get('/createdpengembalian', [dpengembalianController::class, 'create']);
Route::post('/storedpengembalian', [dpengembalianController::class, 'store']);
Route::get('/editdpengembalian/{id}', [dpengembalianController::class, 'edit']);
Route::post('/updatedpengembalian/{id}', [dpengembalianController::class, 'update']);
Route::get('/deletedpengembalian/{id}', [dpengembalianController::class, 'destroy']);
