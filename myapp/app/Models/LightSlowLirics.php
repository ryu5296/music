<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LightSlowLirics extends Model
{
    use HasFactory;

    protected $table = 'lightSlowLirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
