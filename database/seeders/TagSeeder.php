<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tag::create(['name' => 'front', 'isStatus' => false]);
        Tag::create(['name' => 'back', 'isStatus' => false]);
        Tag::create(['name' => 'TODO', 'isStatus' => true]);
        Tag::create(['name' => 'En cours', 'isStatus' => true]);
        Tag::create(['name' => 'Bloqué', 'isStatus' => true]);
        Tag::create(['name' => 'A livrer en préproduction', 'isStatus' => true]);
        Tag::create(['name' => 'A livrer en production', 'isStatus' => true]);
        Tag::create(['name' => 'A recetter', 'isStatus' => true]);
        Tag::create(['name' => 'A voir avec le client', 'isStatus' => true]);
    }
}
