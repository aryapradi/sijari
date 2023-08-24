<?php

use App\Http\Controllers\CalegControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\SaksiController;
use App\Http\Controllers\PartaiController;
use App\Models\Caleg;
use App\Models\Koordinator;
use App\Models\Partai;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layout.main');
// });


// ROUTE HOME / DASHBOARD AWAL 
Route::get('/',[HomeController::class,'home'])->name('home');


// ROUTE PARTAI
Route::get('/DataPartai',[PartaiController::class,'partai'])->name('partai');
Route::get('/form_partai',[PartaiController::class,'create']);


// ROUTE CALEG
Route::get('/DataCaleg',[CalegControllers::class,'caleg'])->name('caleg');
Route::get('/form_caleg',[CalegControllers::class,'create']);



// ROUTE KOORDINATOR
Route::get('/DataKoor',[KoordinatorController::class,'koor'])->name('koor');
Route::get('/form_koor',[KoordinatorController::class,'create']);



// TABLE SAKSI
Route::get('/DataSaksi',[SaksiController::class,'saksi'])->name('saksi');
Route::get('/form_saksi',[SaksiController::class,'create']);


// TABLE PEMILIH
Route::get('/DataPemilih',[PemilihController::class,'pemilih'])->name('pemilih');
Route::get('/form_pemilih',[PemilihController::class,'create']);

