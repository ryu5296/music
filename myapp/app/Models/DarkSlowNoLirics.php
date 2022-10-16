<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class darkSlowNoLirics extends Model
{
    use HasFactory;

    protected $table = 'darkSlowNoLirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
