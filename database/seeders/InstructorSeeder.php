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
              'instructor_job_title' => 'job title',
              'instructor_phone_number' => '0987654321'
         ]);
        Instructor::factory()->count(10)->create();
    }
}
