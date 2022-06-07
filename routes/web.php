<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\KelasController;

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
//     return view('layout/main');
// });

Route::get('/', [GuruController::class, 'index'])->name('home');
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/tambahguru', [GuruController::class, 'create'])->name('tambahguru');
Route::post('/inserdata', [GuruController::class, 'store'])->name('insertdata');

Route::get('/tampilan/{id}', [GuruController::class, 'tampilan'])->name('tampilan');

Route::put('/updatedata/{id}', [GuruController::class, 'update'])->name('updatedata');
Route::delete('/deletedata/{id}', [GuruController::class, 'destroy'])->name('deletedata');
