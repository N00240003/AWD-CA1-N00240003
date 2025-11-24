<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Essay;

class EssaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Essay::insert([
            [
                'artpiece_id' => 1,
                'user_id' => 1,
                'essay_title' => 'The Enigma of the Mona Lisa’s Smile',
                'essay_text' => 'Leonardo da Vinci’s Mona Lisa continues to captivate viewers with a smile that balances between serenity and mystery. The painting’s subtle sfumato technique blends tones seamlessly, creating an illusion of life. Her expression changes depending on where the viewer focuses—an intentional ambiguity that reflects Leonardo’s fascination with human psychology. The atmosphere is quiet, timeless, and intimate, drawing us into a moment suspended between realism and dream.',
                'tags' => json_encode(['portrait', 'renaissance', 'mystery']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 1,
                'user_id' => 1,
                'essay_title' => 'Human Presence and Stillness in the Mona Lisa',
                'essay_text' => 'Beyond its technical mastery, Mona Lisa expresses a profound sense of human presence. Her relaxed pose, gentle gaze, and folded hands convey calm self-possession. The distant landscape behind her contrasts with her warmth, hinting at the complexity of human emotion within the vastness of nature. Leonardo’s precision invites deeper reflection on identity and inner life.',
                'tags' => json_encode(['humanism', 'landscape', 'expression']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 2,
                'user_id' => 2,
                'essay_title' => 'Emotion Through Movement in The Starry Night',
                'essay_text' => 'Vincent van Gogh’s The Starry Night transforms a tranquil night scene into a swirling expression of emotional intensity. The brushstrokes pulse with energy, reflecting Van Gogh’s inner turbulence. The sky seems alive, its spirals contrasting with the still village below. The painting radiates both chaos and hope—symbols of the artist’s struggle and resilience.',
                'tags' => json_encode(['post-impressionism', 'movement', 'emotion']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 2,
                'user_id' => 2,
                'essay_title' => 'Light and Spirituality in The Starry Night',
                'essay_text' => 'The vibrant lights and exaggerated celestial forms suggest a spiritual yearning. Van Gogh viewed the night as richly colored, and this painting embodies that sentiment. The glowing stars, crescent moon, and towering cypress tree feel symbolic, guiding the viewer’s eye upward. It is a dreamlike meditation on nature’s power and the vastness of the universe.',
                'tags' => json_encode(['symbolism', 'night', 'spirituality']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 3,
                'user_id' => 1,
                'essay_title' => 'Time and Surrealism in The Persistence of Memory',
                'essay_text' => 'Salvador Dalí’s melting clocks challenge the idea of time as rigid and linear. In The Persistence of Memory, time appears soft and dreamlike. The barren landscape enhances the strangeness, reflecting Dalí’s fascination with the subconscious. The painting invites viewers to question perception, reality, and memory.',
                'tags' => json_encode(['surrealism', 'time', 'subconscious']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 3,
                'user_id' => 1,
                'essay_title' => 'Dalí’s Dream Logic and Symbolism',
                'essay_text' => 'The unusual forms scattered across the desolate setting operate like symbols in a dream. The melting clocks and the amorphous central figure create a surreal puzzle. Dalí mixes the ordinary with the impossible, showing how dream logic disrupts reality and reveals the fragility of human understanding.',
                'tags' => json_encode(['symbolism', 'dream', 'abstraction']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 4,
                'user_id' => 1,
                'essay_title' => 'The Heroic Ideal in Michelangelo’s David',
                'essay_text' => 'Michelangelo’s David embodies Renaissance ideals of human potential. The statue’s anatomical precision and poised stance reflect classical influence. David stands contemplative, capturing the moment before facing Goliath. His expression conveys tension and confidence, symbolizing the triumph of intellect over brute strength.',
                'tags' => json_encode(['renaissance', 'sculpture', 'heroism']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 4,
                'user_id' => 1,
                'essay_title' => 'Michelangelo’s Mastery of Form in David',
                'essay_text' => 'Carved from a single block of marble, David showcases Michelangelo’s unmatched ability to reveal lifelike form. The torsion of the body, the tension in the limbs, and the realistic veins create dynamic energy. The sculpture celebrates human beauty and dignity through classical form.',
                'tags' => json_encode(['anatomy', 'marble', 'classical']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 5,
                'user_id' => 1,
                'essay_title' => 'The Quiet Intensity of Girl with a Pearl Earring',
                'essay_text' => 'Vermeer captures a fleeting moment as a young woman turns toward the viewer. Her soft expression and luminous pearl earring stand out against the dark background. The contrast of blue and yellow in her clothing enhances her presence, creating a sense of intimate connection.',
                'tags' => json_encode(['baroque', 'portrait', 'light']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'artpiece_id' => 5,
                'user_id' => 1,
                'essay_title' => 'Light, Color, and Mystery in Vermeer’s Work',
                'essay_text' => 'Vermeer’s masterful use of light appears in the gentle highlights on the girl’s eyes and pearl earring. Her direct gaze and half-open mouth evoke mystery. With minimal background, the painting focuses on her quiet grace, capturing a poetic and timeless moment.',
                'tags' => json_encode(['mystery', 'color', 'realism']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
