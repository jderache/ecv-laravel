<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition(): array
    {
        $project = \App\Models\Project::factory()->create();

        return [
            'name' =>  $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'project_id' => $project->id,
        ];
    }
}
