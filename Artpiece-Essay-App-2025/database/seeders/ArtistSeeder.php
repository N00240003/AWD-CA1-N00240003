<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::insert([
            ['name' => 'Vincent van Gogh', 'nationality' => 'Dutch', 'birth_date' => '1853-03-30', 'death_date' => '1890-07-29', 'bio' => 'A post-impressionist painter known for his vivid colors and emotional honesty.', 'movement' => 'Post-Impressionism', 'portrait_url' => 'van_gogh.jpg'],
            ['name' => 'Pablo Picasso', 'nationalality' => 'Spanish', 'birth_date' => '1881-10-25', 'death_date' => '1973-04-08', 'bio' => 'A co-founder of the Cubist movement, Picasso is one of the most influential artists of the 20th century.', 'movement' => 'Cubism', 'portrait_url' => 'picasso.jpg'],
            ['name' => 'Leonardo da Vinci', 'nationality' => 'Italian', 'birth_date' => '1452-04-15', 'death_date' => '1519-05-02', 'bio' => 'A Renaissance polymath whose areas of interest included invention, painting, sculpting, and architecture.', 'movement' => 'Renaissance', 'portrait_url' => 'da_vinci.jpg'],
            ['name' => 'Johannes Vermeer', 'nationality' => 'Dutch', 'birth_date' => '1632-10-31', 'death_date' => '1675-12-16', 'bio' => 'Known for his masterful treatment of light and color, Vermeer is one of the greatest painters of the Dutch Golden Age.', 'movement' => 'Baroque', 'portrait_url' => 'vermeer.jpg']
        ]);
    }
}
