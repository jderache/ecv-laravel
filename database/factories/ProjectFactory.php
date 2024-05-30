<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    public function definition(): array
    {
        $client = \App\Models\Client::inRandomOrder()->first();
        $developer = \App\Models\Developer::inRandomOrder()->first();

        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'client_id' => $client->id,
            'developer_id' => $developer->id,
        ];
    }
}
