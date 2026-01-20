<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataViewControllerOSS;

Route::get('/', [DataViewControllerOSS::class, 'index'])->name('home');

Route::get('/datos', [DataViewControllerOSS::class, 'index'])->name('datos.index');
