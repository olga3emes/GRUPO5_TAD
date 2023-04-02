<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Solo creo uso el seeder del carrito, ya que nos genera un carrito con su usuario.
        $this->call(Carrito_compraSeeder::class);
    }
}
