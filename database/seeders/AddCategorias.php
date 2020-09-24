<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class AddCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([ "genero" => "Ação" ]);
        Genre::create([ "genero" => "Animação" ]);
        Genre::create([ "genero" => "Aventura" ]);
        Genre::create([ "genero" => "Comédia" ]);
        Genre::create([ "genero" => "Dança" ]);
        Genre::create([ "genero" => "Documentário" ]);
        Genre::create([ "genero" => "Drama" ]);
        Genre::create([ "genero" => "Espionagem" ]);
        Genre::create([ "genero" => "Faroeste" ]);
        Genre::create([ "genero" => "Ficção Científica" ]);
        Genre::create([ "genero" => "Guerra" ]);
        Genre::create([ "genero" => "Musical" ]);
        Genre::create([ "genero" => "Policial" ]);
        Genre::create([ "genero" => "Romance" ]);
        Genre::create([ "genero" => "Suspense" ]);
        Genre::create([ "genero" => "Terror" ]);
        Genre::create([ "genero" => "Thriller" ]);
    }
}
