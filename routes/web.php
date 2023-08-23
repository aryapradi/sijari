<?php

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
Route::get('/', function () {
    return view('pages.home');
})->name('home');


// ROUTE CALEG
Route::get('/tablecaleg', function () {
    return view('caleg.table');
})->name('caleg');



// ROUTE KOORDINATOR
Route::get('/tablekoor', function () {
    return view('koordinator.table');
})->name('koor');


// TABLE SAKSI
Route::get('/tablesaksi', function () {
    return view('saksi.table');
})->name('saksi');

// TABLE PEMILIH
Route::get('/tablepemilih', function () {
    return view('pemilih.table');
})->name('pemilih');

