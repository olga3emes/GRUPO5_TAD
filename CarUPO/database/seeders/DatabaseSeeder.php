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

        # Creo unos 10 
        $this->call(UserSeeder::class);
        $this->call(Carrito_compraSeeder::class);
        $this->call(AccesorioSeeder::class);
        $this->call(CocheSeeder::class);
    }
}
