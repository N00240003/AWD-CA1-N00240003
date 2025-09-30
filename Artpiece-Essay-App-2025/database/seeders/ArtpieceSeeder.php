<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artpiece;
use Carbon\Carbon;

class ArtpieceSeeder extends Seeder{
    public function run(): void{
       $currentTimestamp = Carbon:: now();

       Artpiece::insert([
            [
                'title' => 'Mona Lisa',
                'description' => 'A portrait painting by Leonardo da Vinci, famous for the subject\'s enigmatic expression.',
                'img_url' => 'https://example.com/images/mona-lisa.jpg',
                'type' => 'Painting',
                'year' => '1503-06-01',
            ],
            [
                'title' => 'The Starry Night',
                'description' => 'An oil painting by Vincent van Gogh, depicting a swirling night sky over a quiet town.',
                'img_url' => 'https://example.com/images/starry-night.jpg',
                'type' => 'Painting',
                'year' => '1889-06-01',
            ],
            [
                'title' => 'The Persistence of Memory',
                'description' => 'A surrealist painting by Salvador Dalí featuring melting clocks.',
                'img_url' => 'https://example.com/images/persistence-of-memory.jpg',
                'type' => 'Painting',
                'year' => '1931-05-01',
            ],
            [
                'title' => 'David',
                'description' => 'A marble sculpture by Michelangelo representing the biblical hero David.',
                'image_url' => 'https://example.com/images/david.jpg',
                'type' => 'Sculpture',
                'year' => '1504-09-08',
            ],
            [
                'title' => 'Girl with a Pearl Earring',
                'description' => 'A painting by Johannes Vermeer often referred to as the "Mona Lisa of the North".',
                'img_url' => 'https://example.com/images/girl-with-pearl-earring.jpg',
                'type' => 'Painting',
                'year' => '1665-01-01',
            ],
        ]);
    }
}
