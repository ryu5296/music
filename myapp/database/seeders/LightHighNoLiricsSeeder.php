<?php

namespace Database\Seeders;

use App\Models\lightHighNoLirics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LightHighNoLiricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artistMusicName = [
            'tobu' => 'CandyLand',
            'TheFatRat' => 'Monody'
        ];

        foreach($artistMusicName as $key => $value) {
            lightHighNoLirics::create([
                'artist_name' => $key,
                'music_title' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
