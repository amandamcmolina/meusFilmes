<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'titulo', 
        'descricao', 
        'diretor', 
        'ano', 
        'comentario',
        'nota',
        'url_foto'
    ];

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genre', 'genre_movie', 'movie_id', 'genre_id');
    }
}
