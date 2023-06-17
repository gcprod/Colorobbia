<?php

use App\Models\Citizendatas;
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
Auth::routes(['register' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/qrinput', [App\Http\Controllers\HomeController::class, 'input'])->name('inputqrdata');
Route::get('/citizendata', [App\Http\Controllers\CitizenController::class, 'citizendata'])->name('citizendata');
Route::get('/export-pdf-bydate', [App\Http\Controllers\ExportController::class, 'exportPDFbydate'])->name('exportPDFbydate');
Route::get('/export-pdf-byrtrw', [App\Http\Controllers\ExportController::class, 'exportPDFbyrtrw'])->name('exportPDFbyrtrw');
Route::put('/citizendata', [App\Http\Controllers\HomeController::class, 'store'])->name('citizen.data');
Route::put('/qrcitizendata', [App\Http\Controllers\HomeController::class, 'qrstore'])->name('qrcitizen.data');
Route::get('/delete/{id}', [App\Http\Controllers\CitizenController::class, 'destroy'])->name('destroy');
Route::get('/qrdelete/{id}', [App\Http\Controllers\CitizenController::class, 'qrdestroy'])->name('qrdestroy');
Route::get('/update/{id}', [App\Http\Controllers\CitizenController::class, 'update'])->name('update');
Route::get('/qrupdate/{id}', [App\Http\Controllers\CitizenController::class, 'qrupdate'])->name('qrupdate');
Route::put('/edit/{id}', [App\Http\Controllers\CitizenController::class, 'edit'])->name('edit');
Route::get('/qrscanners', [App\Http\Controllers\CitizenController::class, 'scanqr'])->name('scanqr');
Route::get('/qrcitizendata', [App\Http\Controllers\CitizenController::class, 'qrcitizendata'])->name('qrcitizendata');
Route::get('/citizendata', [App\Http\Controllers\CitizenController::class, 'dataByDate'])->name('dataByDate');
Route::get('/selectexport', [App\Http\Controllers\CitizenController::class, 'selectdata'])->name('selectdata');
Route::get('/exportbydate', [App\Http\Controllers\CitizenController::class, 'exportbydate'])->name('exportbydate');
Route::get('/exportbyrtrw', [App\Http\Controllers\CitizenController::class, 'exportbyrtrw'])->name('exportbyrtrw');

