<?php

namespace Database\Seeders;

use App\Models\LearnKeyPoint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearnKeyPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LearnKeyPoint::insert([
            ['course_id' => 1, 'name' => 'Grasp how Javascript works and it\'s fundamental concepts', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Write solid, good Javascript code', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Understand advanced concepts such as closures, prototypal inheritance, IIFEs, and much more.', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Drastically improve your ability to debug problems in Javascript.', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Avoid common pitfalls and mistakes other Javascript coders make', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Understand the source code of popular Javascript frameworks', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Build your own Javascript framework or library', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 1, 'name' => 'Build your own Javascript framework or library', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 2, 'name' => 'Build powerful, fast, user-friendly and reactive web apps', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'name' => 'rovide amazing user experiences by leveraging the power of JavaScript with ease', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'name' => 'Apply for high-paid jobs or work as a freelancer in one the most-demanded sectors you can find in web dev right now', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 2, 'name' => 'Learn all about React Hooks and React Components', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 3, 'name' => 'Develop modern, complex, responsive and scalable web applications with Angular 13', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'name' => 'Fully understand the architecture behind an Angular application and how to use it', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'name' => 'Use the gained, deep understanding of the Angular fundamentals to quickly establish yourself as a frontend developer', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 3, 'name' => 'Create single-page applications with one of the most modern JavaScript frameworks out there', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 4, 'name' => 'Work with one of the most in-demand web development programming languages', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'name' => 'Learn the basics as well as advanced concepts of NodeJS in great detail', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'name' => 'Build modern, fast and scalable server-side web applications with NodeJS, databases like SQL or MongoDB and more', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 4, 'name' => 'Understand the NodeJS ecosystem and build server-side rendered apps, REST APIs and GraphQL APIs', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 5, 'name' => 'You will learn to create a (CMS) Content Management System like WordPress, Drupal or Joomla', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'name' => 'You will learn how to use Databases', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'name' => 'You will learn MySQL', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 5, 'name' => 'Object Oriented Programming', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 6, 'name' => 'Learn New OOP techniques  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 6, 'name' => 'Build PHP OOP applications  ', 'created_at' => now(), 'updated_at' => now()],


            ['course_id' => 7, 'name' => 'Understand how APIs work  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'name' => 'Learn how to use an API from PHP  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'name' => 'Create an API from scratch in plain PHP  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'name' => 'Create, Read, Update, Delete (CRUD) using an API  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'name' => 'Understand what REST and RESTful APIs are  ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 7, 'name' => 'Create a RESTful API in PHP', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 8, 'name' => 'By the end of the course, you will have a solid knowledge of PHP ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Discover how to use variables ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'How to debug PHP code ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Learn how to read a configuration file ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Discover the basics of using a PHP library ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Common security threats ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Learn functions, date and time, debugging and logging ', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 8, 'name' => 'Discover code reuse, feeding a function, return data from a function ', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 9, 'name' => 'Become a modern and confident HTML and CSS developer, no prior knowledge needed!', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'name' => 'Design and build a stunning real-world project for your portfolio from scratch', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'name' => 'Modern, semantic and accessible HTML5', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'name' => 'Modern CSS (previous CSS3), including flexbox and CSS Grid for layout', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'name' => 'Important CSS concepts such as the box model, positioning schemes, inheritance, solving selector conflicts, etc.', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 9, 'name' => 'A web design framework with easy-to-use rules and guidelines to design eye-catching websites', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 10, 'name' => 'Write HTML Code', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'name' => 'Write CSS Code', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'name' => 'Understand the CSS Box Model', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 10, 'name' => 'Combine CSS and HTML to build websites', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 11, 'name' => 'learn how to use JSON', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'name' => 'learn how to make AJAX calls in JavaScript', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'name' => 'Access JSON data files and use the content within JavaScript', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 11, 'name' => 'Use files to create JavaScript objects on the fly', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 12, 'name' => 'NATIVE HANA', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'name' => 'HANA MODELLING', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'name' => 'AMDP', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'name' => 'ADBC', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'name' => 'CDS VIEWS', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 12, 'name' => 'ALV IDA', 'created_at' => now(), 'updated_at' => now()],

            ['course_id' => 13, 'name' => 'Get Job In SAP ABAP Either As Fresher Or Experienced With Good Package', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'name' => 'Functional Consultants Become Techno-Functional Consultants', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'name' => 'Contact Me Through Udemy Platform', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'name' => 'SAP ABAP Basics And Advanced Topics', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'name' => 'How To Use SAP System', 'created_at' => now(), 'updated_at' => now()],
            ['course_id' => 13, 'name' => 'Write Programs With Ease', 'created_at' => now(), 'updated_at' => now()],



        ]);
    }
}
