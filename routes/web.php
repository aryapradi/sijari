<?php

use App\Http\Controllers\CalegControllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\SaksiController;
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


// ROUTE CALEG
Route::get('/DataCaleg',[CalegControllers::class,'caleg'])->name('caleg');



// ROUTE KOORDINATOR
Route::get('/DataKoor',[KoordinatorController::class,'koor'])->name('koor');


// TABLE SAKSI
Route::get('/DataSaksi',[SaksiController::class,'saksi'])->name('saksi');


// TABLE PEMILIH
Route::get('/DataPemilih',[PemilihController::class,'pemilih'])->name('pemilih');

