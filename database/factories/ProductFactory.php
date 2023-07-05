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
        $categoriesIDs = Category::iDs()->get()->pluck('id');

        return [
            'category_id' => fake()->randomElement($categoriesIDs),
            'title' => fake()->unique()->sentence(3, true),
            'description' => fake()->text,
            'short_description' => fake()->sentence(10, true),
            'SKU' => Str::random(35),
            'price' => round(fake()->randomFloat(2, 1, 100000), 2),
            'discount' => rand(0, 1) ? fake()->numberBetween(5, 50) : null,
            'in_stock' => fake()->numberBetween(0, 300),
            'thumbnail' => fake()->imageUrl(646,640)


        ];
    }
}
