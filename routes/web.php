<?php

use Illuminate\Support\Facades\Auth;
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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/qrinput', [App\Http\Controllers\HomeController::class, 'input'])->name('inputqrdata');
Route::get('/citizendata', [App\Http\Controllers\CitizenController::class, 'citizendata'])->name('citizendata');
// Route::get('/citizendata/create', [App\Http\Controllers\CitizenController::class, 'citizendata'])->name('citizendata');

// Route::put('/citizendata', [App\Http\Controllers\CitizenController::class, 'citizendata'])->name('citizendata');
Route::put('/citizendata', [App\Http\Controllers\HomeController::class, 'store'])->name('citizen.data');
Route::put('/qrcitizendata', [App\Http\Controllers\HomeController::class, 'qrstore'])->name('qrcitizen.data');
Route::get('/delete/{id}', [App\Http\Controllers\CitizenController::class, 'destroy'])->name('destroy');
Route::get('/qrdelete/{id}', [App\Http\Controllers\CitizenController::class, 'qrdestroy'])->name('qrdestroy');
Route::get('/update/{id}', [App\Http\Controllers\CitizenController::class, 'update'])->name('update');
Route::get('/qrupdate/{id}', [App\Http\Controllers\CitizenController::class, 'qrupdate'])->name('qrupdate');
Route::put('/edit/{id}', [App\Http\Controllers\CitizenController::class, 'edit'])->name('edit');
Route::get('/export-pdf', [App\Http\Controllers\CitizenController::class, 'exportPdf'])->name('exportPdf');
Route::get('/qrscanners', [App\Http\Controllers\CitizenController::class, 'scanqr'])->name('scanqr');
Route::get('/qrcitizendata', [App\Http\Controllers\CitizenController::class, 'qrcitizendata'])->name('qrcitizendata');
