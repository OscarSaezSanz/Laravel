<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Producto_OSS_Controller;

Route::get('/', [Producto_OSS_Controller::class, 'index'])->name('productos.index');
Route::get('/producto/{id}', [Producto_OSS_Controller::class, 'show'])->name('productos.show');

