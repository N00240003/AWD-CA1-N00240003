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
            [
                'name' => 'Vincent van Gogh', 
                'nationality' => 'Dutch', 
                'birth_date' => '1853-03-30', 
                'death_date' => '1890-07-29', 
                'bio' => 'A post-impressionist painter known for his vivid colors and emotional honesty.', 
                'movement' => 'Post-Impressionism', 
                'portrait_url' => 'van_gogh.jpg'
            ],
            ['name' => 'Pablo Picasso', 'nationalality' => 'Spanish', 'birth_date' => '1881-10-25', 'death_date' => '1973-04-08', 'bio' => 'A co-founder of the Cubist movement, Picasso is one of the most influential artists of the 20th century.', 'movement' => 'Cubism', 'portrait_url' => 'picasso.jpg'],
            ['name' => 'Leonardo da Vinci', 'nationality' => 'Italian', 'birth_date' => '1452-04-15', 'death_date' => '1519-05-02', 'bio' => 'A Renaissance polymath whose areas of interest included invention, painting, sculpting, and architecture.', 'movement' => 'Renaissance', 'portrait_url' => 'da_vinci.jpg'],
            ['name' => 'Johannes Vermeer', 'nationality' => 'Dutch', 'birth_date' => '1632-10-31', 'death_date' => '1675-12-16', 'bio' => 'Known for his masterful treatment of light and color, Vermeer is one of the greatest painters of the Dutch Golden Age.', 'movement' => 'Baroque', 'portrait_url' => 'vermeer.jpg'],

            [
                'name' => 'Michelangelo Buonarroti',
                'nationality' => 'Italian',
                'birth_date' => '1475-03-06',
                'death_date' => '1564-02-18',
                'bio' => 'A Renaissance sculptor, painter, and architect known for masterpieces such as the Sistine Chapel ceiling and David.',
                'movement' => 'Renaissance',
                'portrait_url' => 'michelangelo.jpg'
            ],
            [
                'name' => 'Salvador Dalí',
                'nationality' => 'Spanish',
                'birth_date' => '1904-05-11',
                'death_date' => '1989-01-23',
                'bio' => 'A prominent surrealist known for his bizarre dreamlike imagery and technical mastery.',
                'movement' => 'Surrealism',
                'portrait_url' => 'dali.jpg'
            ],
            [
                'name' => 'Frida Kahlo',
                'nationality' => 'Mexican',
                'birth_date' => '1907-07-06',
                'death_date' => '1954-07-13',
                'bio' => 'Known for her deeply personal and symbolic self-portraits exploring pain and identity.',
                'movement' => 'Surrealism',
                'portrait_url' => 'kahlo.jpg'
            ],
            [
                'name' => 'Georgia O’Keeffe',
                'nationality' => 'American',
                'birth_date' => '1887-11-15',
                'death_date' => '1986-03-06',
                'bio' => 'An influential modernist painter known for her flower paintings and desert landscapes.',
                'movement' => 'Modernism',
                'portrait_url' => 'okeeffe.jpg'
            ],
            [
                'name' => 'Artemisia Gentileschi',
                'nationality' => 'Italian',
                'birth_date' => '1593-07-08',
                'death_date' => '1656-01-01',
                'bio' => 'A Baroque painter celebrated for her powerful depictions of biblical heroines.',
                'movement' => 'Baroque',
                'portrait_url' => 'gentileschi.jpg'
            ],
            [
                'name' => 'Claude Monet',
                'nationality' => 'French',
                'birth_date' => '1840-11-14',
                'death_date' => '1926-12-05',
                'bio' => 'A founder of the Impressionist movement, known for his landscapes and studies of light.',
                'movement' => 'Impressionism',
                'portrait_url' => 'monet.jpg'
            ],
            [
                'name' => 'Rembrandt van Rijn',
                'nationality' => 'Dutch',
                'birth_date' => '1606-07-15',
                'death_date' => '1669-10-04',
                'bio' => 'A master of the Dutch Golden Age known for his innovative use of light and shadow.',
                'movement' => 'Baroque',
                'portrait_url' => 'rembrandt.jpg'
            ],
            [
                'name' => 'Andy Warhol',
                'nationality' => 'American',
                'birth_date' => '1928-08-06',
                'death_date' => '1987-02-22',
                'bio' => 'A leading figure of pop art, known for his iconic images of consumer culture and celebrity.',
                'movement' => 'Pop Art',
                'portrait_url' => 'warhol.jpg'
            ],
            [
                'name' => 'Edgar Degas',
                'nationality' => 'French',
                'birth_date' => '1834-07-19',
                'death_date' => '1917-09-27',
                'bio' => 'An Impressionist known for his depictions of dancers, daily life, and movement.',
                'movement' => 'Impressionism',
                'portrait_url' => 'degas.jpg'
            ],
            [
                'name' => 'Élisabeth Vigée Le Brun',
                'nationality' => 'French',
                'birth_date' => '1755-04-16',
                'death_date' => '1842-03-30',
                'bio' => 'One of the most successful portraitists of the 18th century, known for her work with European royalty.',
                'movement' => 'Rococo',
                'portrait_url' => 'vigee_le_brun.jpg'
            ]
        ]);
    }
}
