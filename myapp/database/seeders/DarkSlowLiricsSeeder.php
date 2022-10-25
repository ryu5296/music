<?php

namespace Database\Seeders;

use App\Models\DarkSlowLirics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DarkSlowLiricsSeeder extends Seeder
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
            DarkSlowLirics::create([
                'artist_name' => $key,
                'music_title' => $value,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
        }
    }
}
