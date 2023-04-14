<?php

namespace Database\Factories;

use App\Models\Accesorio;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccesorioFactory extends Factory
{
    protected $model = Accesorio::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'fk_producto_id' => $this,
        ];
    }
}
