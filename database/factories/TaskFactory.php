<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => fake()->sentence(),
            'starting_date' => now(),
            'ending_date' => $this->faker->date(),
            
            'project_id' => Project::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
