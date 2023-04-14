<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coche;
use App\Models\Producto;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coche::factory()->create([
            'marca' => 'Lamborghini',
            'modelo' => 'Huracán',
            'color' => 'Verde',
            'combustible' => 'Gasolina',
            'cilindrada' => '5204',
            'potencia' => '579',
            'nPuertas' => '2',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Coche nuevo de 2022',
                'foto' => '/images/lamborghini.png',
                'precio' => '56.25',
            ]),
        ]);
        Coche::factory()->create([
            'marca' => 'Ferrari',
            'modelo' => 'F8',
            'color' => 'Rojo',
            'combustible' => 'Gasolina',
            'cilindrada' => '3902',
            'potencia' => '721',
            'nPuertas' => '2',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Coche de segunda mano de 2015',
                'foto' => '/images/ferrari.png',
                'precio' => '56.15',
            ]),
        ]);
        Coche::factory()->create([
            'marca' => 'Porsche',
            'modelo' => 'Panamera',
            'color' => 'Gris',
            'combustible' => 'Gasolina',
            'cilindrada' => '2894',
            'potencia' => '330',
            'nPuertas' => '5',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Coche modificado de 2018',
                'foto' => '/images/porsche.png',
                'precio' => '60.0',
            ]),
        ]);
        Coche::factory()->create([
            'marca' => 'Rols Royce',
            'modelo' => 'Phantom',
            'color' => 'Gris',
            'combustible' => 'Gasolina',
            'cilindrada' => '6749',
            'potencia' => '460',
            'nPuertas' => '5',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Coche nuevo de 2023',
                'foto' => '/images/rollsroyce.png',
                'precio' => '60.0',
            ]),
        ]);
        Coche::factory()->create([
            'marca' => 'Bugatti',
            'modelo' => 'Veyron',
            'color' => 'Negro',
            'combustible' => 'Gasolina',
            'cilindrada' => '7993',
            'potencia' => '1001',
            'nPuertas' => '2',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Coche de segunda mano del actor Mario Casas',
                'foto' => '/images/bugatti.png',
                'precio' => '937',
            ]),
        ]);
    }
}
