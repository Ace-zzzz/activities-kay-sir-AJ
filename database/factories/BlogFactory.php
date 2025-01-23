<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $this->faker->colorName(),
            'author_id' => $this->faker->randomElement([1, 2, 3, 5]),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement([1, 0]),
        ];
    }
}