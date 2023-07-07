<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => fake()->unique()->words(rand(1, 2), true),
            'description' => fake()->paragraph(rand(1, 5)),
            'short_description' => fake()->words(rand(3, 5), true),
            'SKU' => fake()->unique()->ean8(),
            'price' => fake()->randomFloat(2, 10, 100000),
            'discount' => rand(0, 90),
            'in_stock' => fake()->numberBetween(0, 300),
            'thumbnail' => fake()->imageUrl(646,640, 'cars', true)


        ];
    }
}
