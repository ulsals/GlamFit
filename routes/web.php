<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\MakeupController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', [MakeupController::class, 'index'])->name('homepage');
