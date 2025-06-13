<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 100 random woorden voor de lingo game
        $words = [
            'apple', 'grape', 'lemon', 'mango', 'peach',
            'bread', 'crisp', 'flame', 'blaze', 'crane',
            'plant', 'bloom', 'water', 'river', 'stone',
            'glass', 'chair', 'table', 'clock', 'light',
            'brain', 'heart', 'lungs', 'nerve', 'blood',
            'tiger', 'zebra', 'eagle', 'shark', 'whale',
            'happy', 'sadly', 'angry', 'quiet', 'noisy',
            'brave', 'proud', 'silly', 'funny', 'weird',
            'clear', 'cloud', 'storm', 'windy', 'rainy',
            'sweet', 'soury', 'spicy', 'salty', 'bitter',
            'candy', 'bread', 'sugar', 'fruit', 'honey',
            'brick', 'steel', 'metal', 'glass', 'paper',
            'plane', 'train', 'truck', 'cycle', 'scoot',
            'piano', 'guitar', 'viola', 'drums', 'flute',
            'mouse', 'board', 'cable', 'phone', 'modem',
            'north', 'south', 'east', 'westy', 'above',
            'actor', 'movie', 'stage', 'scene', 'frame',
            'pride', 'flock', 'group', 'bunch', 'teamy',
            'sharp', 'point', 'curve', 'block', 'angle',
            'tasty', 'toast', 'grill', 'spoon', 'knife'
        ];

        foreach ($words as $word) {
            DB::table('words')->insert([
                'word' => $word,
            ]);
        }
    }
}
