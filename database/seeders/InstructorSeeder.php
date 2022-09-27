<?php

namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Instructor::create([
            'instructor_name' => 'instructor',
            'instructor_email' => 'instructor@gmail.com',
            'instructor_img' => 'storage/app/public/instructors/JYXAJlHHhApLHEGYJVsn5ksRDoVhFMaSdB6Pjdza.jpg'
        ]);
        Instructor::factory()->count(10)->create();
    }
}