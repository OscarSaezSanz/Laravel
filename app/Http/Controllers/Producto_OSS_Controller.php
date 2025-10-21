<?php

namespace App\Http\Controllers;

use App\Models\Producto_OSS;
use Illuminate\Http\Request;

class Producto_OSS_Controller extends Controller
{
    public function index()
    {
        $productos = Producto_OSS::all();
        return view('productos.index', compact('productos'));
    }

    public function show($id)
    {
        $producto = Producto_OSS::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}
