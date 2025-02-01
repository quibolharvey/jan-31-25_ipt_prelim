<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Category::factory(5)->create()->each(function ($category) {
            Product::factory(10)->create(['category_id' => $category->id]);
        });
    }
}

