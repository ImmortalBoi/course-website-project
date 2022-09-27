<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randcourseid = DB::table('courses')->pluck('course_id')->random();
        $randstudentid = DB::table('students')->pluck('student_id')->random();
        DB::table('enrollments')->insert([
            'course_id' => $randcourseid,
            'student_id' => $randstudentid
        ]);

    }
}
