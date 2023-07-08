<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(5)->create()->each(function($category) {
            Product::factory(rand(2, 5))->make()->each(function($product) use ($category) {
                $category->products()->create($product->attributesToArray());
            });
        });
    }
}
