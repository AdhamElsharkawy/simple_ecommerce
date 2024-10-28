<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'stock' => 1000,
            'price' => 10000,
        ]);

        Product::create([
            'name' => 'Product 2',
            'stock' => 2000,
            'price' => 20000,
        ]);

        Product::create([
            'name' => 'Product 3',
            'stock' => 3000,
            'price' => 30000,
        ]);
    }
    
}
