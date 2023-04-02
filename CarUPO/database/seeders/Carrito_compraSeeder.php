<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrito_compra;
use App\Models\User;

class Carrito_compraSeeder extends Seeder
{
    public function run()
    {

        // Creo un carrito por cada usuario
        $users = User::all();

        foreach ($users as $user) {
            Carrito_compra::factory()->create(['fk_user' => $user->id]);
        }
    }
}
