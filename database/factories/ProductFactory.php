<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $name = $this->faker->company; // Generate a random brand name
        return [
            'name' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'short_desc' => $this->faker->sentence(),
            'desc' => $this->faker->paragraph(),
            'regular_price' => $this->faker->randomFloat(2, 10, 100),
            'sale_price' => $this->faker->numberBetween(100,500),
            'SKU' => $this->faker->numberBetween(100,500),
            'stock_status' => $this->faker->randomElement(['instock', 'outofstock']),
            'quantity' => $this->faker->numberBetween(1, 100),
            'image' => $this->faker->numberBetween(1, 20) . '.jpg', // Random image name (1.jpg to 6.jpg)
            'images' => $this->faker->numberBetween(1, 20) . '.jpg',
            'category_id' => $this->faker->numberBetween(1, 6), // Assuming you have categories set up
            'brand_id' => $this->faker->numberBetween(1, 6), // Assuming you have brands set up
        ];
    }
}
