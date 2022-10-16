<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LightSlowNoLirics extends Model
{
    use HasFactory;

    protected $table = 'lightSlowNoLirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
