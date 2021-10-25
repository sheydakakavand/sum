<?php

use First\Sum\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/showForm', [IndexController::class, 'showForm'])->name('showForm');
Route::post('/sum', [IndexController::class, 'validateForm'])->name('validateForm');
