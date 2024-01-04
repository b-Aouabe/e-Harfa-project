<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*
         *$table->id();
            $table->foreignId('owner_id')->constrained('users', 'id')->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();
         * */
        return [
            'owner_id' => User::factory(),
            'title' => fake()->title(),
            'description' => fake()->text(),
            'price' => fake()->numberBetween(300, 900),
            'quantity' => fake()->numberBetween(100, 300)
        ];
    }
}
