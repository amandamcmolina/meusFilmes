@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/applogado.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-cardMovie.css') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Epilogue&display=swap') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}">
@endsection

@section('content')
    
        <div class="addPrimeiroFilme">
            <!-- <input type="button" id="myBtnMovie"  class="btn btn-addFilme" > -->
            <a href="#" id="myBtnMovie"  class="btn btn-addFilme"><img class='teste' src="{{ url('img/addFilme.png') }}" alt=""></a>
        </div>
        <!-- Modal Register Movie -->
        <section class="movieItemRegister modalMovie" id="myModalMovie">
            <div class="modal-contentMovie">
                <span class="closeMovie">&times;</span>
                <form action="php/addFilme.php" method="post" enctype="multipart/form-data">
                    <label for="titulo">Título do Filme:</label><br>
                    <input type="text" id="titulo" name="titulo" maxlength="36"><br>
                    <label for="descricao">Descrição:</label><br>
                    <textarea name="descricao" id="descricao" cols="30" rows="3" maxlength="137"></textarea><br>
                    <!-- Generos tags -->
                    <label for="genero">Gênero:</label><br>
                    <div class="container-genero">
                        <div class="tag-container-genero">
                            <input type="text" id="g_autocomplete" name="genero"><br>
                        </div>
                    </div>
                    <!-- Fim generos tags -->
                    <!-- atores tags -->
                    <label for="atoresPrincipais">Atores Principais:</label><br>
                    <div class="container">
                        <div class="tag-container">
                            <input type="text" id="atoresPrincipais" name="atores">
                        </div>
                    </div>
                    <!-- fim atores tags -->
                    <label for="diretor">Diretor:</label><br>
                    <input type="text" id="diretor" name="diretor"><br>
                    <label for="ano">Ano de estreia:</label><br>
                    <input type="number" id="ano" name="ano"><br>
                    <label for="comentario">Comentário:</label><br>
                    <textarea name="comentario" id="comentario" cols="30" rows="3" maxlength="55"></textarea><br>
                    <label for="note">Nota:</label><br>
                    <input type="number" id="nota" name="nota"><br>
                    <label for="capa">Adicione uma capa para o filme:</label><br>
                    <input type="file" name="capa"><br>
                    <button class=" btn btn-save">Salvar</button>
                </form>
            </div>
        </section>
        <!-- Fim register movie -->
        <!-- Cards Movies -->
        <section class="filmes">
            <!-- MODELO -->
            <div class="card-movieItem">
                <img class="img-capa" src="{{ url('img/filmeUm.jpg') }}" alt="dirtyDancing">
                <p class="data-atualizacao">15/07/2020</p>
                <div class='tituloSquare'>
                    <h2>Dirty Dancing</h2>
                </div>
                <p class="year">1987</p>
                <div class="movieSquare">
                    <p class="movieDescription">O filme é sobre as férias de verão de Baby, uma jovem mulher que encontra
                        seu verdadeiro amor em um dançarino. </p>
                </div>
                <p class="genre"> <a href="#"> Romance</a></p>
                <div class="atoresSquare">
                    <p class="principalsActors">Patrick Swayse / Jennifer Grey</p>
                </div>
                <div class="direcaoSquare">
                    <p class="director">Direção: Emile Ardolino</p>
                </div>
                <div class="comentarioSquare">
                    <img class="plus" src="{{ url('img/plus.png') }}" alt="Comentário Pessoal">
                    <p class="coments">Top 10 dos meus filmes preferidos</p>
                </div>
                <div class="gradeSquare">
                    <p class="grade"> Nota: 10</p>
                </div>
                <div class='edit-delete'>
                    <input class='edit btn' type='button' value='editar'>
                    <form action="php/deleteMovie.php" method="POST">
                        <input class='delete btn' type='submit' value='excluir'>
                    </form>
                </div>
            </div>
            <!-- FIM DO MODELO -->
        </section>
        <!-- Fim cards Movies -->
    
@endsection

@section('js')
    <script src="js/loginModal.js"></script>
    <script src="js/registerUserModal.js"></script>
    <script src="js/registerMovieModal.js"></script>
    <!-- FIM scripts modal -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/generos.js"></script>
    <script src="js/actors.js"></script>
    <script src="js/editMovie.js"></script>
@endsection
