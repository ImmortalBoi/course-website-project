<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use \App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Student',
            'email'=>'student@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone_number' => '012345678' ,
            'is_student'=>1,
        ]);
        Student::create([
            'student_name'=>'Student',
            'student_email'=>'student@gmail.com',
            'student_password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        User::factory()->count(100)->create([
            'is_student' => 1
        ])->each(function (User $user){
           Student::factory()->create([
               'student_name' => $user['name'],
               'student_email' => $user['email'],
               'student_password' => $user['password'],
               'student_phone_number' => $user['phone_number']
           ]);
        });
    }
}
