<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Order_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_item::insert([
            ['id' => 1, 'order_id' => 1, 'user_id' =>  3, 'owner_user_id' => 2, 'course_id' => 1, 'unit' => 1, 'unit_price' => 50, "admin_commission" => '5', 'owner_balance' => 45, 'sell_commission' => 10, 'type' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        Enrollment::insert([
            ['id' => 1, 'order_id' => 1, 'user_id' =>  3, 'owner_user_id' => 2, 'course_id' => 1, 'start_date' => now(), 'end_date' => MAX_EXPIRED_DATE, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
