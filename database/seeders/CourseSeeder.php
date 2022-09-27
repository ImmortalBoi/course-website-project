<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randInstructorID = DB::table('instructors')->pluck('instructor_id')->random();
        DB::table('courses')->insert([
            'course_name' => Str::random(10),
            'instructor_id' => $randInstructorID,
            'course_description' => Str::random(100)
        ]);
    }
}
