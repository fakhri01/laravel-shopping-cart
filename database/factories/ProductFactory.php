<?php

namespace Database\Factories;

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
        return [
            'title' => 'Product 1',
            'description' => 'lorem ipsum dolor sit amet',
            'price' => 9.99,
            'quantity' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
