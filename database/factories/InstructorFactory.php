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
            'instructor_img' => 'public/instructors/RfZv1EC2g8ZQjvRkmHN8CoU9YmVxZ0GJl619gLMl.jpg',
            'instructor_job_title' => fake()->jobTitle()
        ];
    }
}
