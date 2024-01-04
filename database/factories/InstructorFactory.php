<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition(): array
    {
        /*
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('job');
            $table->string('address');
            $table->string('highest_degree_attained');
            $table->string('field_of_study');
            $table->text('teaching_exp');
            $table->timestamps();
        */
        return [
            'user_id' => User::factory()->create(['role' => 'instructor']),
            'job' => fake()->jobTitle(),
            'highest_degree_attained' => fake()->country(),
            'field_of_study' => fake()->randomAscii(),
            'teaching_exp' => fake()->text()
        ];
    }
}
