<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected static array $categories = [
        'Refrigerators',
        'Washing Machines',
        'Ovens',
        'Vacuum Cleaners',
        'Dishwashers',
        'Microwaves',
        'Air Conditioners',
        'Blenders',
        'Toasters',
        'Coffee Makers',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(self::$categories),
            'description' => fake()->text()
        ];
    }

    public static function categoriesAmount()
    {
        return count(self::$categories);
    }
}
