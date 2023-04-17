<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call(UserSeeder::class);
        $this->call(Carrito_compraSeeder::class);
        $this->call(FavoritosSeeder::class);
        $this->call(CocheSeeder::class);
        $this->call(AccesorioSeeder::class);
    }
}
