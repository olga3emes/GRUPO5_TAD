<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accesorio;


class AccesorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 1; $i < 6; $i++) {
            Accesorio::factory()->create([
                'fk_producto_id' => $i,
            ]);
        }
    }
}
