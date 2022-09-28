<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_name' => fake()->text(10),
            'instructor_id' => 0,
            'course_img' => 'public/img/courses-img/Pe0do5R2uMjFOi181DjNUl229PIFHKtnmAEKKgBI.jpg',
            'course_price' => random_int(200,700),
            'course_rate' => fake()->randomFloat(3,3,5),
            'course_lectures' => random_int(10,30),
            'course_language' => fake()->randomElement(['English','Arabic','French','German']),
            'course_description' => fake()->text(),
            'course_level' => fake()->randomElement(['All levels','Beginner','Intermediate','Expert']),
            'course_duration' => fake()->randomFloat(2,15,30)
        ];
    }
}
