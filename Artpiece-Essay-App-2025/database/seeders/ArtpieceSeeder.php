<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artpiece;
use App\Models\Artist;
use Carbon\Carbon;

class ArtpieceSeeder extends Seeder
{
    public function run(): void
    {

        $currentTimestamp = Carbon::now();

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
                'img_url' => 'david.jpg',
                'type' => 'Sculpture',
                'year' => '1504-09-08',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Creation of Adam',
                'description' => 'A fresco from the Sistine Chapel illustrating God giving life to Adam, renowned for its iconic nearly-touching hands.',
                'img_url' => 'Creation_of_Adam.jpg',
                'type' => 'Fresco',
                'year' => '1512-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Metamorphosis of Narcissus',
                'description' => 'A surreal interpretation of the Narcissus myth, featuring doubled imagery and Dalí’s symbolic transformations.',
                'img_url' => 'Metamorphosis_of_Narcissus.jpg',
                'type' => 'Painting',
                'year' => '1937-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Two Fridas',
                'description' => 'A dual self-portrait reflecting Frida Kahlo’s emotional turmoil and dual heritage, linked by a shared lifeline.',
                'img_url' => 'The_Two_Fridas.jpg',
                'type' => 'Painting',
                'year' => '1939-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Black Iris III',
                'description' => 'A close-up floral abstraction emphasizing depth and sensuality through boldly magnified petals.',
                'img_url' => 'Black_Iris.jpg',
                'type' => 'Painting',
                'year' => '1926-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Jimson Weed / White Flower No. 1',
                'description' => 'A large-scale flower depiction characterized by smooth shapes and O’Keeffe’s signature gentle luminosity.',
                'img_url' => 'White_Flower.jpg',
                'type' => 'Painting',
                'year' => '1932-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Judith Slaying Holofernes',
                'description' => 'A dramatic Baroque scene portraying Judith beheading Holofernes, noted for its intensity and realism.',
                'img_url' => 'Judith_Slaying_Holofernes.jpg',
                'type' => 'Painting',
                'year' => '1620-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Self-Portrait as the Allegory of Painting',
                'description' => 'An allegorical self-portrait in which the artist embodies the very concept of painting.',
                'img_url' => 'Self_Portrait_Allegory.jpg',
                'type' => 'Painting',
                'year' => '1638-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Self-Portrait with Thorn Necklace and Hummingbird',
                'description' => 'A symbolic self-portrait portraying pain, endurance, and spiritual motifs through detailed botanical elements.',
                'img_url' => 'Thorn_Necklace.jpg',
                'type' => 'Painting',
                'year' => '1940-01-01',
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
            [
                'title' => 'Water Lilies',
                'description' => 'One of Monet’s iconic Impressionist works depicting tranquil water surfaces layered with shifting light and reflections.',
                'img_url' => 'Water_Lilies.jpg',
                'type' => 'Painting',
                'year' => '1906-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Impression, Sunrise',
                'description' => 'A hazy harbor scene whose atmospheric brushwork helped define the Impressionist movement.',
                'img_url' => 'Impression_Sunrise.jpg',
                'type' => 'Painting',
                'year' => '1872-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Night Watch',
                'description' => 'A dynamic group portrait known for its dramatic lighting and lively depiction of a city militia.',
                'img_url' => 'Night_Watch.jpg',
                'type' => 'Painting',
                'year' => '1642-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Self-Portrait with Two Circles',
                'description' => 'One of Rembrandt’s mature self-portraits, displaying profound psychological depth and masterful texture.',
                'img_url' => 'Two_Circles.jpg',
                'type' => 'Painting',
                'year' => '1665-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Campbell’s Soup Cans',
                'description' => 'A Pop Art series transforming commercial imagery into fine art through repetition and uniform presentation.',
                'img_url' => 'Soup_Cans.jpg',
                'type' => 'Painting',
                'year' => '1962-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Marilyn Diptych',
                'description' => 'A silkscreen composition featuring repeated Marilyn Monroe portraits exploring fame, mass media, and decay.',
                'img_url' => 'Marilyn_Diptych.jpg',
                'type' => 'Painting',
                'year' => '1962-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Ballet Class',
                'description' => 'A study of young ballerinas in practice, emphasizing movement, discipline, and Degas’s keen observational style.',
                'img_url' => 'The_Ballet_Class.jpg',
                'type' => 'Painting',
                'year' => '1874-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'L’Absinthe',
                'description' => 'A somber café scene capturing isolation and urban ennui through muted tones and psychological tension.',
                'img_url' => 'LAbsinthe.jpg',
                'type' => 'Painting',
                'year' => '1876-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Marie Antoinette with a Rose',
                'description' => 'A refined royal portrait emphasizing elegance and grace through soft colors and dignified posture.',
                'img_url' => 'Marie_Antoinette_Rose.jpg',
                'type' => 'Painting',
                'year' => '1783-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Self-Portrait with Her Daughter',
                'description' => 'A tender double portrait depicting Vigée Le Brun with her daughter Julie, emphasizing maternal affection and the artist’s graceful style.',
                'img_url' => 'Self-Portrait_with_Her_Daughter.jpg',
                'type' => 'Painting',
                'year' => '1789-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach ($artpieces as $artpieceData) {
            // Insert artpiece into artpieces table
            $artpiece = Artpiece::create(array_merge($artpieceData, ['created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp]));
            // Select 1 or 2 random artists from the artists table
            $artists = Artist::inRandomOrder()->take(rand(1, 2))->pluck('id');

            // Attach selected artists to the artpiece
            $artpiece->artists()->attach($artists);
        }

    }
}
