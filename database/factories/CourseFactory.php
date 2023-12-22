<?php

namespace Database\Factories;

use App\Models\CourseCategory;
use App\Models\Instructor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $difficulties = ['easy', 'medium', 'advanced'];

        return [
            'instructor_id' => Instructor::factory(),
            'course_category_id' => CourseCategory::factory(),
            'title' => $this->faker->unique()->sentence,
            'excerpt' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'slug' => Str::slug($this->faker->unique()->sentence),
            'difficulty' => $this->faker->randomElement($difficulties),
            'popularity' => $this->faker->numberBetween(1, 100),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
