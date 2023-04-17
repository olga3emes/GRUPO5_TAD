<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Favoritos;
use App\Models\User;

class FavoritosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creo un carrito por cada usuario
        $users = User::all();

        foreach ($users as $user) {
            Favoritos::factory()->create(['fk_user' => $user->id]);
        }
    }
}
