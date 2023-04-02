<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrito_compra;

class Carrito_compraSeeder extends Seeder
{
    public function run()
    {
        Carrito_compra::factory()->count(10)->create();
    }
}
