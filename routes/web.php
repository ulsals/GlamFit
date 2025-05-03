<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\MakeupController;
use App\Http\Controllers\KebayaController;
use App\Http\Controllers\PesanController;



Route::get('/', [MakeupController::class, 'index'])->name('homepage');
Route::post('/layanan/pesan', [MakeupController::class, 'pesan'])->name('layanan.pesan');
Route::get('/', [MakeupController::class, 'index'])->name('layanan.index');




