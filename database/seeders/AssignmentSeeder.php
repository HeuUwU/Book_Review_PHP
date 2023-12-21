<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assignment::insert([
            ['uuid' => Str::uuid()->toString(), 'user_id' => 3, 'course_id' => 1, 'name' => 'New Assignment', 'description' => 'This is description', 'marks' => 50, 'status' => 1, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
