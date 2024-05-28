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
        User::firstOrCreate([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Regular User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Event Organizer',
            'email' => 'penyelenggara@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'organizer',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Cak Adi',
            'email' => 'cakadi190@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Moh Fajar',
            'email' => 'fajar123@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Nasya A.P.',
            'email' => 'nasya@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        User::firstOrCreate([
            'name' => 'Nugi',
            'email' => 'nugi@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => now(),
            'status' => 'active',
        ]);

        // Category::create([
        //     'name' => 'Mobile Legend',
        //     'photo' => 'assets/img/profil.png',
        //     'membersPerTeam' =>
        // ]);

    }
}
