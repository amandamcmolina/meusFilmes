<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genero'
    ];

    public function movies()
    {
        return $this->belongsToMany('App\Models\Movie', 'genre_movie', 'genre_id', 'movie_id');
    }
}