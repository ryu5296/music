<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DarkHighLirics extends Model
{
    use HasFactory;

    protected $table = 'darkHighLirics';

    protected $fillable = [
        'artist_name',
        'music_title',
    ];
}
