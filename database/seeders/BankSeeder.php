<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::insert([
            ['id' => 1, 'name' => 'U.S bank', 'account_name' => 'john doe', 'account_number' => '123456', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Wells Fargo Bank', 'account_name' => 'Jams Mango', 'account_number' => '987456', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Chase Bank', 'account_name' => 'Robert', 'account_number' => '369852', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Bank of America', 'account_name' => 'Michael', 'account_number' => '654123', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'PNC Bank', 'account_name' => 'Test Bank', 'account_number' => '258741', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
