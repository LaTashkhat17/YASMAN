<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->company; // Generate a random brand name
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'img' => $this->faker->numberBetween(1,6) . '.jpg',
        ];
    }
}
