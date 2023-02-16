<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(2)->create();
        // \App\Models\Room::factory(3)->create();
        // \App\Models\FacilityRoom::factory(10)->create();
        // \App\Models\FacilityHotel::factory(10)->create();
        // \App\Models\Transaction::factory(10)->create();
        // \App\Models\FacilitysRoom::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => '1',
            'email_verified_at' => now(),
        ]);
    }
}
