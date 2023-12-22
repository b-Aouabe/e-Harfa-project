<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(1)->create(['role' => 'admin']);
         \App\Models\User::factory(1)->create(['role' => 'instructor']);
         \App\Models\User::factory(1)->create(['role' => 'student']);

         \App\Models\Course::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);


    }
}
