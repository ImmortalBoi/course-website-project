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
        $pathArray = array();
        for ($i=1; $i < 7 ; $i++) {
            $path = "/img/courses-".$i.".jpg";
            array_push($pathArray,$path);
        }
        return [
            'course_name' => fake()->text(10),
            'instructor_id' => 0,
            'course_img' => fake()->randomElement($pathArray),
            'course_price' => random_int(200,700),
            'course_rate' => fake()->randomFloat(3,3,5),
            'course_lectures' => random_int(10,30),
            'course_language' => fake()->randomElement(['English','Arabic','French','German']),
            'course_description' => fake()->text(),
            'course_level' => fake()->randomElement(['All levels','Beginner','Intermediate','Expert']),
            'course_duration' => fake()->randomFloat(2,15,30),
            'is_active' => fake()->boolean(),
        ];
    }
}
