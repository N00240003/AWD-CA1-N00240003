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
        User::insert([
            [
            'name' => 'Reggie',
            'email' => 'regular' . '@user.com',
            'password' => Hash::make('password'), //Password is hashed for security
            'role' => 'user', // Set role to user
            ],
            [
            'name' => 'Anna',
            'email' => 'anna' . '@mail.com',
            'password' => Hash::make('password'), 
            'role' => 'user', 
            ],
            [ 
            'name' => 'Jim',
            'email' => 'jim' . '@mail.com',
            'password' => Hash::make('password'), 
            'role' => 'user', 
            ]
    ]);
    }
}
