<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Developer::factory(10)->create();
    }
}
