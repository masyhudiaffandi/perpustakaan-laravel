<?php

use App\Http\Controllers\BukuController;
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
Route::get('/', [BukuController::class, 'index'])->name('bukus.index');

Route::post('/store', [BukuController::class, 'store'])->name('bukus.store');

Route::get('/edit/{id}', [BukuController::class, 'edit'])->name('bukus.edit');

Route::put('/update/{id}', [BukuController::class, 'update'])->name('bukus.update');

Route::delete('/destroy/{id}', [BukuController::class, 'destroy'])->name('bukus.destroy');