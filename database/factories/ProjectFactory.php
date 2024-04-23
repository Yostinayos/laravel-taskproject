<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'starting_date' => now(),
            'ending_date' => $this->faker->date(),
            'user_id' => User::all()->random()->id,
            'customer_id' => Customer::all()->random()->id,
            'category_id' => Category::all()->random()->id,
        ];
    }
}
