<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LightHighLirics extends Model
{
    use HasFactory;

    protected $table = 'light_High_Lirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];

    public function getData()
    {
        return DB::table($this->table)->inRandomOrder()->first();
    }
}
