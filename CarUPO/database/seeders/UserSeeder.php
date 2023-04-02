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
        // Create 9 users with admin set to false and email verified
        User::factory(9)->create([
            'admin' => false,
            'email_verified_at' => now(),
        ]);

        // Create 1 user with admin set to true and email verified
        User::factory()->create([
            'admin' => true,
            'email_verified_at' => now(),
        ]);
    }
}
