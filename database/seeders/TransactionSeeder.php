<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productA = Product::where('name', 'Product 1')->first();
        $productB = Product::where('name', 'Product 2')->first();

        // Create transactions with different dates
        $dates = [
            Carbon::now()->subDays(5),
            Carbon::now()->subDays(4),
            Carbon::now()->subDays(3),
            Carbon::now()->subDays(2),
            Carbon::now()->subDays(1),
            Carbon::now(),
        ];

        foreach ($dates as $date) {
            // Purchases
            Transaction::create([
                'product_id' => $productA->id,
                'type' => 'purchase',
                'quantity' => rand(20, 100),
                'amount' => rand(100, 500),
                'created_at' => $date,
            ]);

            // Sales
            Transaction::create([
                'product_id' => $productA->id,
                'type' => 'sell',
                'quantity' => rand(10, 50),
                'amount' => rand(50, 300),
                'created_at' => $date,
            ]);

            // Stock Adjustments
            Transaction::create([
                'product_id' => $productB->id,
                'type' => 'open_stock',
                'quantity' => rand(50, 150),
                'amount' => rand(100, 200),
                'created_at' => $date,
            ]);
        }
    }
}
