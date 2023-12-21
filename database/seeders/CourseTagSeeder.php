<?php

namespace Database\Seeders;

use App\Models\Course_tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course_tag::insert([
            ['course_id' => 1, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 2, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 3, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 4, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 5, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 6, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 6, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 6, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 6, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 7, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 8, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 9, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 10, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 11, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 12, 'tag_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'tag_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'tag_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'tag_id' => 4, 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 13, 'tag_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'tag_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'tag_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'tag_id' => 8, 'created_at' => now(), 'updated_at' => now()],


        ]);
    }
}
