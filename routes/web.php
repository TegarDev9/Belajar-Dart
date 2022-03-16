<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\anggotaController;

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

Route::get('/anggota', [anggotaController::class, 'index']);
Route::get('/createAnggota', [anggotaController::class, 'create']);
Route::post('/store', [anggotaController::class, 'store']);
Route::get('/edit/{id}', [anggotaController::class, 'edit']);
Route::post('/update/{id}', [anggotaController::class, 'update']);
Route::get('/delete/{id}', [anggotaController::class, 'destroy']);
