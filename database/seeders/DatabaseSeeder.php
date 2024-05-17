<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::create([
            'name' => 'penyelenggara',
            'email' => 'penyelenggara@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'organizer',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        // Category::create([
        //     'name' => 'Mobile Legend',
        //     'photo' => 'assets/img/profil.png',
        // ]);

    }
}
