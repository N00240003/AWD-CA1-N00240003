<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Artpiece;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
    [
        'name' => 'Reggie',
        'email' => 'regular@user.com',
        'password' => Hash::make('password'),
        'role' => 'user',
    ],
    [
        'name' => 'Anna',
        'email' => 'anna@mail.com',
        'password' => Hash::make('password'),
        'role' => 'user',
    ],
    [
        'name' => 'Jim',
        'email' => 'jim@mail.com',
        'password' => Hash::make('password'),
        'role' => 'user',
    ]
];

    //     foreach ($users as $userData) {
    //         $user = User::create(array_merge($userData, ['created_at' => now(), 'updated_at' => now()]));
    //         $artpieces = Artpiece::inRandomOrder()->take(3)->pluck('id'); // Get 3 random artpiece IDs
    //         $user->favArtpieces()->attach($artpieces); // Attach artpieces to user's favorites  

    //     }
    // }
}
