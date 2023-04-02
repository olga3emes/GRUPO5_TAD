<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Carrito_compra;
use App\Models\User;

class Carrito_compraFactory extends Factory
{
    protected $model = Carrito_compra::class;

    public function definition()
    {
        return [
            'fk_user' => function () {
                return User::factory()->create()->id;
            },
            'precio_total' => 0,
        ];
    }
}
