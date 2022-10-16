<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class darkHighNoLirics extends Model
{
    use HasFactory;

    protected $table = 'darkHighNoLirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
