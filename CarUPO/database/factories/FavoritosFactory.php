<?php

namespace Database\Factories;

use App\Models\Favoritos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favoritos>
 */
class FavoritosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Favoritos::class;

    public function definition()
    {
        return [
            'fk_user' => User::factory(),
        ];
    }
}
