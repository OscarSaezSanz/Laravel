<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto_OSS;

class ProductoOSSFactory extends Factory
{
    protected $model = Producto_OSS::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(2, true),
            'descripcion' => $this->faker->sentence(10),
            'precio' => $this->faker->randomFloat(2, 10, 200),
            'stock' => $this->faker->numberBetween(1, 100),
        ];
    }
}




