<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Product_id' => Product::factory(),
            'order_id' => Order::factory(),
            'quantity' => fake()->numberBetween(100, 300),
            'amount' => fake()->numberBetween(100, 300)
        ];
    }
}
