<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Product::factory()->create([
            'title' => 'Product 1',
            'description' => 'lorem ipsum dolor sit amet',
            'price' => 9.99,
            'quantity' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
