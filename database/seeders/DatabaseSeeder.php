<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto_OSS;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Productos fijos y realistas
        $productos = [
            [
                'nombre' => 'Teclado Logitech G Pro X',
                'descripcion' => 'Teclado mecánico profesional con switches intercambiables y diseño compacto.',
                'precio' => 139.99,
                'stock' => 10,
            ],
            [
                'nombre' => 'Ratón Inalámbrico Logitech M720',
                'descripcion' => 'Ratón ergonómico Bluetooth con batería recargable y diseño cómodo.',
                'precio' => 34.50,
                'stock' => 25,
            ],
            [
                'nombre' => 'Monitor Samsung 24" Full HD',
                'descripcion' => 'Pantalla LED de 24 pulgadas con resolución 1080p y tecnología Eye Saver.',
                'precio' => 149.99,
                'stock' => 12,
            ],
            [
                'nombre' => 'Auriculares HyperX Cloud II',
                'descripcion' => 'Auriculares gaming con sonido envolvente 7.1 y micrófono desmontable.',
                'precio' => 99.00,
                'stock' => 30,
            ],
            [
                'nombre' => 'Micrófono USB Blue Yeti',
                'descripcion' => 'Micrófono profesional ideal para streaming y podcasts.',
                'precio' => 120.00,
                'stock' => 8,
            ],
            [
                'nombre' => 'Disco SSD Kingston 1TB',
                'descripcion' => 'Unidad de estado sólido con velocidad de lectura de 500MB/s.',
                'precio' => 89.99,
                'stock' => 40,
            ],
            [
                'nombre' => 'Portátil ASUS VivoBook 15',
                'descripcion' => 'Laptop con procesador i5, 16GB RAM y SSD de 512GB.',
                'precio' => 699.00,
                'stock' => 10,
            ],
            [
                'nombre' => 'Base Refrigerante para Portátil',
                'descripcion' => 'Soporte con ventiladores LED azules para mantener tu laptop fresca.',
                'precio' => 25.99,
                'stock' => 20,
            ],
            [
                'nombre' => 'Altavoces Logitech Z333',
                'descripcion' => 'Sistema de altavoces 2.1 con subwoofer y 80W de potencia.',
                'precio' => 59.99,
                'stock' => 18,
            ],
            [
                'nombre' => 'Webcam Full HD Microsoft LifeCam',
                'descripcion' => 'Cámara web 1080p ideal para videollamadas y streaming.',
                'precio' => 49.99,
                'stock' => 22,
            ],
        ];

        foreach ($productos as $producto) {
            Producto_OSS::create($producto);
        }
    }
}

