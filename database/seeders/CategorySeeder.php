<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'category_name' => 'Canned Goods',
            'description' => 'Canned food items'
        ]);

        Category::create([
            'category_name' => 'Beverages',
            'description' => 'Soft drinks, juices, and teas'
        ]);
    }
}
