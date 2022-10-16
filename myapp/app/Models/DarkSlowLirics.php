<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DarkSlowLirics extends Model
{
    use HasFactory;

    protected $table = 'darkSlowLirics';
    
    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
