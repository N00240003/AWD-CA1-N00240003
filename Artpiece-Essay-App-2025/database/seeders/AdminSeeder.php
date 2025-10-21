<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; //Must import User model so that "User::create" works (we're linking User class)

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin' . '@example.com',
            'password' => Hash::make('password'), //Password is hashed for security
            'role' => 'admin', // Set role to admin
        ]);
    }
}
