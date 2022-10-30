<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DarkHighLirics;
use App\Models\LightSlowLirics;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            LightHighLiricsSeeder::class,
            LightHighNoLiricsSeeder::class,
            LightSlowLiricsSeeder::class,
            LightSlowNoLiricsSeeder::class,
            DarkHighLiricsSeeder::class,
            DarkHighNoLiricsSeeder::class,
            DarkSlowLiricsSeeder::class,
            DarkSlowNoLiricsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
