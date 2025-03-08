<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word, // Ensures unique category names
            'slug' => $this->faker->unique()->slug, // Ensures unique slugs
            'img' => $this->faker->numberBetween(1, 6) . '.jpg', // Random image
        ];
    }
}
