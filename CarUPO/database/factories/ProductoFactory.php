<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->sentence,
            'foto' => $this->faker->imageUrl(),
            'precio' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
