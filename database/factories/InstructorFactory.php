<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instructor>
 */
class InstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'instructor_name' => fake()->name(),
            'instructor_email' => fake()->unique()->safeEmail(),
            'instructor_img' => 'public/instructors/V1Y5PssUGoOkszYcOtNO1D8qteFbxbmFZUCM8unz.jpg',
            'instructor_job_title' => fake()->jobTitle(),
            'instructor_phone_number' => fake()->phoneNumber()
        ];
    }
}
