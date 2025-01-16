<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->randomElement([1,2,3,4]),
            'title' => fake()->colorName(),
            'author_id' => fake()->randomElement([1,2,3,5]),
            'description' => fake()->sentence(),
            'status' => fake()->randomElement([1,0]),
        ];
    } 
}
