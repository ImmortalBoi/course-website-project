<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(InstructorSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(CatagorySeeder::class);
    }
}
