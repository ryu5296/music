<?php

namespace Database\Seeders;

use App\Models\LightSlowLirics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LightSlowLiricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artistMusicNames = [
            'Mr.Children' => '蘇生',
            'コブクロ' => '桜',
            'ビッケブランカ' => '蒼天のヴァンパイア',
            'KREVA' => 'Na Na Na',
        ];

        foreach($artistMusicNames as $key => $value) {
            LightSlowLirics::create([
                'artist_name' => $key,
                'music_title' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
        }
    }
}
