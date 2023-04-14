<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accesorio;
use App\Models\Producto;

class AccesorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Accesorio::factory()->create([
            'nombre' => 'Camiseta Ferrari',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Camiseta talla única L con logo de Ferrari',
                'foto' => '/images/camisetaFerrari.png',
                'precio' => '65',
            ]),
        ]);
        Accesorio::factory()->create([
            'nombre' => 'Llavero Rolls Royce',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Llavero con el logo de la marca de Rolls Royce',
                'foto' => '/images/llaveroRollsRoyce.png',
                'precio' => '10',
            ]),
        ]);
        Accesorio::factory()->create([
            'nombre' => 'Pulsera Lamborghini',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Pulsera negra con el nombre de la marca de Lamborghini',
                'foto' => '/images/pulseraLamborghini.png',
                'precio' => '20',
            ]),
        ]);
        Accesorio::factory()->create([
            'nombre' => 'Gorra Bugatti',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Gorra con diseño de la marca Bugatti',
                'foto' => '/images/gorraBugatti.png',
                'precio' => '20',
            ]),
        ]);
        Accesorio::factory()->create([
            'nombre' => 'Reloj Porsche',
            'fk_producto_id' => Producto::factory()->create([
                'descripcion' => 'Reloj diseñado por la marca Porsche',
                'foto' => '/images/relojPorsche.png',
                'precio' => '8000',
            ]),
        ]);
    }
}
