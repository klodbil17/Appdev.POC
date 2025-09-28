<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Sample 1', 'price' => 45000, 'stock' => 10]);
        Product::create(['name' => 'Sample 2', 'price' => 20000, 'stock' => 5]);
        Product::create(['name' => 'Sample 3', 'price' => 1500, 'stock' => 0]); // auto-archived 
    }
}
