<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PARA GENERAR 10 PRODUCTOS CON DATOS ALEATORIOS
        //for ($i = 1; $i < 10; $i++) {
        //    Producto::factory()->create();
        //}

        Producto::factory()->create([
            'descripcion' => 'Coche nuevo de 2022',
            'foto' => '/images/lamborghini.png',
            '56.25',
        ]);
    }
}
