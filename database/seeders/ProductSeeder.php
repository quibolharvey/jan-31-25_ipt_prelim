<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'product_name' => 'Soda Can',
            'description' => 'Carbonated drink',
            'category_id' => 2,
            'purchase_price' => 10.00,
            'quantity' => 50
        ]);

        Product::create([
            'product_name' => 'Cola Bottle',
            'description' => '1L carbonated soft drink',
            'category_id' => 2,
            'purchase_price' => 15.00,
            'quantity' => 40
        ]);

        Product::create([
            'product_name' => 'Orange Soda',
            'description' => '500ml orange-flavored soft drink',
            'category_id' => 2,
            'purchase_price' => 12.00,
            'quantity' => 30
        ]);

        Product::create([
            'product_name' => 'Lemon Iced Tea',
            'description' => 'Sweetened iced tea with lemon flavor',
            'category_id' => 2,
            'purchase_price' => 14.00,
            'quantity' => 25
        ]);

        Product::create([
            'product_name' => 'Canned Tuna',
            'description' => '150g canned tuna in vegetable oil',
            'category_id' => 1,
            'purchase_price' => 18.00,
            'quantity' => 60
        ]);

        Product::create([
            'product_name' => 'Corned Beef',
            'description' => '200g premium corned beef',
            'category_id' => 1,
            'purchase_price' => 22.00,
            'quantity' => 45
        ]);

        Product::create([
            'product_name' => 'Canned Sardines',
            'description' => '155g sardines in tomato sauce',
            'category_id' => 1,
            'purchase_price' => 12.00,
            'quantity' => 75
        ]);

        Product::create([
            'product_name' => 'Canned Pineapple Chunks',
            'description' => '500g canned pineapple chunks in syrup',
            'category_id' => 1,
            'purchase_price' => 25.00,
            'quantity' => 30
        ]);

        Product::create([
            'product_name' => 'Canned Green Peas',
            'description' => '400g canned green peas',
            'category_id' => 1,
            'purchase_price' => 16.00,
            'quantity' => 50
        ]);

        Product::create([
            'product_name' => 'Canned Mushroom',
            'description' => '200g canned button mushrooms',
            'category_id' => 1,
            'purchase_price' => 20.00,
            'quantity' => 40
        ]);
    }
}
