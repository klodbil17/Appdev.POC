<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'customer_name' => 'Juan Dela Cruz',
            'address' => 'Manila',
            'phone' => '09123456789',
            'total' => 45000,
            'status' => 'pending'
        ]);

        Order::create([
            'customer_name' => 'Maria Clara',
            'address' => 'Quezon City',
            'phone' => '09987654321',
            'total' => 21500,
            'status' => 'confirmed'
        ]);
    }
}
