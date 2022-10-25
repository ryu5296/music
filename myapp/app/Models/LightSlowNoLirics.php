<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LightSlowNoLirics extends Model
{
    use HasFactory;

    protected $table = 'light_slow_nolirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];

    public function getData()
    {
        return DB::table($this->table)->inRandomOrder()->first();
    }
}
