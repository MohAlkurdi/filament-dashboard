<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin
        \App\Models\User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'admin@morph.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'ADMIN',
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(10)->create();
    }
}
