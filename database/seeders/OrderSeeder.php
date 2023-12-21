<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            ['id' => 1, 'uuid' => Str::uuid()->toString(), 'user_id' => 3, 'order_number' => '120547', 'sub_total' => 50, 'discount' => '0.00', 'shipping_cost' => '0.00', 'tax' => 0.00, 'platform_charge' => 2.00, 'current_currency' => 'USD', 'grand_total' => 51, 'payment_currency' => 'USD', 'conversion_rate' => 1, 'grand_total_with_conversation_rate' => 51, 'payment_method' => 'paypal', 'payment_status' => 'paid', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
