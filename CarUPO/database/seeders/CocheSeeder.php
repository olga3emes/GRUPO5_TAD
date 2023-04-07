<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coche;


class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 6; $i < 11; $i++) {
            Coche::factory()->create([
                'fk_producto_id' => $i,
            ]);
        }
    }
}
