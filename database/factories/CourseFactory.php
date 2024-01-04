<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Instructor;
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
    public function definition(): array
    {

        return [
            'instructor_id' => Instructor::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'excerpt' => fake()->paragraph(),
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs(6)) . '</p>',

        ];
    }
}
