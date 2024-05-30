<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    public function definition(): array
    {
        $project = Project::inRandomOrder()->first();
        $developer = Developer::inRandomOrder()->first();

        return [
            'name' =>  $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'project_id' => $project->id,
            'developer_id' => $developer->id,
        ];
    }
}
