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
            'admin' => true,
            'email_verified_at' => now(),
        ]);

        // Creo 9 usuarios normales con el email verificado
        User::factory(9)->create([
            'admin' => false,
            'email_verified_at' => now(),
        ]);
    }
}
