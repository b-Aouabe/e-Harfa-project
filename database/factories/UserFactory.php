<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = ['student', 'instructor'];
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->phoneNumber,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Default password for all users
            'social_id' => null, // You can customize this based on your requirements
            'social_type' => null, // You can customize this based on your requirements
            'role' => $this->faker->randomElement($roles),
            'avatar' => null, // You can customize this based on your requirements
            'bio' => $this->faker->paragraph,
            'completed_courses' => $this->faker->numberBetween(0, 10),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
//            'password' => static::$password ??= Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
