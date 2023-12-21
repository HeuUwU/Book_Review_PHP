<?php

namespace Database\Seeders;

use App\Models\Instructor;
use App\Models\Organization;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ['id' => 1, 'name' => 'Administration', 'email' => 'admin@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 1, 'phone_number' => '+8801999999901',
                'address' => 'Dhaka, Bangladesh', 'image' => 'uploads_demo/user/admin-avatar.png', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Johnny Depp', 'email' => 'instructor@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 2, 'phone_number' => '+8801999999902',
                'address' => 'Khulna, Bangladesh', 'image' => 'uploads_demo/user/1.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Will Smith', 'email' => 'student@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 3, 'phone_number' => '+8801999999903',
                'address' => 'Comilla, Bangladesh', 'image' => 'uploads_demo/user/student-avatar.jpg', 'created_at' => now(), 'updated_at' => now()],

            ['id' => 4, 'name' => 'James Bond', 'email' => 'james@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 2, 'phone_number' => '+8801999999904',
                'address' => 'Sylhet, Bangladesh', 'image' => 'uploads_demo/user/2.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Darrell Edwards', 'email' => 'darrell@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 2, 'phone_number' => '+8801999999905',
                'address' => 'Rajshahi, Bangladesh', 'image' => 'uploads_demo/user/3.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Jack Nicholson', 'email' => 'jack@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 2, 'phone_number' => '+8801999999906',
                'address' => 'Dinajpur, Bangladesh', 'image' => 'uploads_demo/user/4.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => 'Organization', 'email' => 'organization@gmail.com', 'email_verified_at' => now(), 'password' => Hash::make(123456), 'role' => 4, 'phone_number' => '+8801999999907',
                'address' => 'Dinajpur, Bangladesh', 'image' => 'uploads_demo/user/4.jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        Student::insert([
            ['id' => 1,'uuid' => Str::uuid()->toString(), 'user_id' => 2, 'country_id' => 15, 'state_id' => 305, 'city_id' => 7216, 'first_name' => 'Johnny', 'last_name' => 'Depp',
                'phone_number' => '+8801999999991', 'postal_code'  => '1200', 'address' => 'Khulna, Bangladesh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id'=> 2,'uuid' => Str::uuid()->toString(), 'user_id' => 3, 'country_id' => 15, 'state_id' => 305, 'city_id' => 7216, 'first_name' => 'Will', 'last_name' => 'Smith',
                'phone_number' => '+8801999999992', 'postal_code'  => '1200', 'address' => 'Comilla, Bangladesh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id'=> 3,'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'country_id' => 15, 'state_id' => 305, 'city_id' => 7216, 'first_name' => 'James', 'last_name' => 'Bond',
                'phone_number' => '+8801999999993', 'postal_code'  => '1200', 'address' => 'Sylhet, Bangladesh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id'=> 4,'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'country_id' => 15, 'state_id' => 305, 'city_id' => 7216, 'first_name' => 'Darrell', 'last_name' => 'Edwards',
                'phone_number' => '+8801999999994', 'postal_code'  => '1200', 'address' => 'Rajshahi, Bangladesh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id'=> 5,'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'country_id' => 15, 'state_id' => 305, 'city_id' => 7216, 'first_name' => 'Jack', 'last_name' => 'Nicholson',
                'phone_number' => '+8801999999995', 'postal_code'  => '1200', 'address' => 'Dinajpur, Bangladesh', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],

        ]);

        Instructor::insert([
            ['id' => 1,'uuid' => Str::uuid()->toString(), 'user_id' => 2, 'country_id' => 15, 'state_id' => 305, 'first_name' => 'Johnny', 'last_name' => 'Depp', 'professional_title' => 'PHP Developer',
                'phone_number' => '+8801999999991', 'postal_code'  => '1200', 'address' => 'Khulna, Bangladesh', 'about_me' => 'Freelancers and entrepreneurs Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.', 'gender' => 'Male', 'social_link' => "", 'slug' => 'test-instructor',
                'is_private' => 'no', 'remove_from_web_search' => 'no', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2,'uuid' => Str::uuid()->toString(), 'user_id' => 4, 'country_id' => 15, 'state_id' => 305, 'first_name' => 'James', 'last_name' => 'Bond', 'professional_title' => 'Python Developer',
                'phone_number' => '+8801999999992', 'postal_code'  => '1200', 'address' => 'Khulna, Bangladesh', 'about_me' => 'Freelancers and entrepreneurs Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.', 'gender' => 'Male', 'social_link' => "", 'slug' => 'james-bond',
                'is_private' => 'no', 'remove_from_web_search' => 'no', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3,'uuid' => Str::uuid()->toString(), 'user_id' => 5, 'country_id' => 15, 'state_id' => 305, 'first_name' => 'Darrell', 'last_name' => 'Edwards', 'professional_title' => 'JavaScript Developer',
                'phone_number' => '+8801999999993', 'postal_code'  => '1200', 'address' => 'Khulna, Bangladesh', 'about_me' => 'Freelancers and entrepreneurs Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.', 'gender' => 'Male', 'social_link' => "", 'slug' => 'darrell-edwards',
                'is_private' => 'no', 'remove_from_web_search' => 'no', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4,'uuid' => Str::uuid()->toString(), 'user_id' => 6, 'country_id' => 15, 'state_id' => 305, 'first_name' => 'Jack', 'last_name' => 'Nicholson', 'professional_title' => 'Nodejs Developer',
                'phone_number' => '+8801999999994', 'postal_code'  => '1200', 'address' => 'Dinajpur, Bangladesh', 'about_me' => 'Freelancers and entrepreneurs Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.', 'gender' => 'Male', 'social_link' => "", 'slug' => 'jack-nicholson',
                'is_private' => 'no', 'remove_from_web_search' => 'no', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],

        ]);
        
        Organization::insert([
            ['id' => 1,'uuid' => Str::uuid()->toString(), 'user_id' => 7, 'country_id' => 15, 'state_id' => 305, 'first_name' => 'Zai', 'last_name' => 'Organization', 'professional_title' => 'PHP Developer',
                'phone_number' => '+8801999999998', 'postal_code'  => '1200', 'address' => 'Khulna, Bangladesh', 'about_me' => 'Freelancers and entrepreneurs Freelancers and entrepreneurs use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.use about.me to grow their audience and get more clients. · Create a page to present who you are and what you do in one link.', 'gender' => 'Male', 'social_link' => "", 'slug' => 'test-instructor',
                'is_private' => 'no', 'remove_from_web_search' => 'no', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        $user = User::where('email', 'admin@gmail.com')->first();
        if ($user){
            $role = Role::first();
            if ($role){
                $user->assignRole($role);
            }
        }

    }
}
