<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database with users.
     *
     * @return void
     */
    public function run()
    {
        // Creo 1 usuario admin con el email verificado
        User::factory()->create([
            'name' => "admin",
            'surname' => "",
            'email' => "admin@hotmail.com",
            'password' => bcrypt("admin"),
            'admin' => true,
            'email_verified_at' => now(),
        ]);

        User::factory()->create([
            'name' => "Alberto",
            'surname' => "García Gonzalez",
            'email' => "alberto@carupo.es",
            'password' => bcrypt("1234"),
            'admin' => false,
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'name' => "Lidia",
            'surname' => "Gant Pinar",
            'email' => "lidia@carupo.es",
            'password' => bcrypt("1234"),
            'admin' => false,
            'email_verified_at' => now(),
        ]);
        User::factory()->create([
            'name' => "Alejandro",
            'surname' => "Román Caballero",
            'email' => "alejandro@carupo.es",
            'password' => bcrypt("1234"),
            'admin' => false,
            'email_verified_at' => now(),
        ]);

        // Creo 9 usuarios normales con el email verificado
        User::factory(9)->create([
            'admin' => false,
            'email_verified_at' => now(),
        ]);
    }
}
