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

        \App\Models\User::factory()->create([
            'name' => 'Joshua Jayrous',
            'email' => 'joshuajayrous@gmail.com',
            'profile_photo_path' => 'img/profile-photos/test.png',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::factory(10)->create();
    }
}
