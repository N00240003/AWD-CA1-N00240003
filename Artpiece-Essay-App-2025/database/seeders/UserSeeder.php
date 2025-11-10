<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Regular User',
            'email' => 'regular' . '@user.com',
            'password' => Hash::make('password'), //Password is hashed for security
            'role' => 'user', // Set role to user
        ]);
    }
}
