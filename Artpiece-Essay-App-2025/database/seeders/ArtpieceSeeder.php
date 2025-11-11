<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artpiece;
use App\Models\Artist;
use Carbon\Carbon;

class ArtpieceSeeder extends Seeder{
    public function run(): void{

       $currentTimestamp = Carbon:: now();

       // Creates array of artpieces
        $artpieces = [
            [
                'title' => 'Mona Lisa',
                'description' => 'A portrait painting by Leonardo da Vinci, famous for the subject\'s enigmatic expression.',
                'img_url' => 'Mona_Lisa_by_Leonardo_da_Vinci.jpg',
                'type' => 'Painting',
                'year' => '1503-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Starry Night',
                'description' => 'An oil painting by Vincent van Gogh, depicting a swirling night sky over a quiet town.',
                'img_url' => 'Starry_Night_Van_Gogh.jpg',
                'type' => 'Painting',
                'year' => '1889-06-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Persistence of Memory',
                'description' => 'A surrealist painting by Salvador Dalí featuring melting clocks.',
                'img_url' => 'The_Persistence_of_Memory.jpg',
                'type' => 'Painting',
                'year' => '1931-05-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'David',
                'description' => 'A marble sculpture by Michelangelo representing the biblical hero David.',
                'img_url' => '1761331192.png',
                'type' => 'Sculpture',
                'year' => '1504-09-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Girl with a Pearl Earring',
                'description' => 'A painting by Johannes Vermeer often referred to as the "Mona Lisa of the North".',
                'img_url' => 'Girl_with_Pearl_Earring.jpg',
                'type' => 'Painting',
                'year' => '1665-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($artpieces as $artpieceData) {
            // Insert artpiece into artpieces table
            $artpiece = Artpiece::create(array_merge($artpieceData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));

            $artists = Artist::inRandomOrder()->take(rand(1, 2))->pluck('id');

            // Attach selected artists to the artpiece
            $artpiece->artists()->attach($artists);
        }


    }
}
