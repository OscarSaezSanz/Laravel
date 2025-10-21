<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductoOSSFactory;

class Producto_OSS extends Model
{
    use HasFactory;

    protected $table = 'productos_oss';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];

    // 👇 Forzar a Laravel a usar la clase correcta
    protected static function newFactory()
    {
        return ProductoOSSFactory::new();
    }
}


