<?php
require_once('php/cardFormulation.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Filmes</title>
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <div class="cabecalho">
        <div class="entrar">
            <a class="login" id="myBtn" href="#">Cadastrar</a>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form class="userRegisterForm" action="">
                        <div class="titulocadastro">
                            <h3>Cadastro do Usuário</h3><br>
                        </div>
                        <label for="name">Username</label><br>
                        <input type="text" name="name" id="name"><br>
                        <label for="email">Email</label><br>
                        <input type="text" name="email" id="email"><br>
                        <label for="password">Senha</label><br>
                        <input type="password" name="password" id="password"><br>
                        <label for="passwordCheck">Confirmar Senha</label><br>
                        <input type="password" name="passwordCheck" id="passwordCheck"><br>
                        <button class=" btn btn-userRegister">Confirmar</button>
                    </form>
                </div>
            </div>


            <a class="login" id="myBtnLogin" href="#">Login</a>

            <div id="myModalLogin" class="modalLogin">
                <div class="modal-contentLogin">
                    <span class="closeLogin">&times;</span>
                    <form class="userRegisterForm" action="">
                        <div class="titulocadastro">
                            <h3>Login</h3><br>
                        </div>
                        <label for="userName">Username ou email</label><br>
                        <input type="text" name="userName" id="userName"><br>
                        <label for="userPassword">Senha</label><br>
                        <input type="Password" name="userPassword" id="userPassword"><br>
                        <button class=" btn btn-userRegister">Entrar</button>
                    </form>
                </div>
            </div>

        </div>
        <h1>Meus Filmes</h1>

        <hr>
        <p>Minha lista personaliza de filmes</p>
    </div>

    <main>
        <?php
            if($msg){//flash message
                echo "<h2>".$msg."</h2>";
            }

        ?>
        <div class="addPrimeiroFilme">
            <input type="button" id="myBtnMovie" class="btn btn-addFilme" value="Adicionar filme">
        </div>
        <section class="movieItemRegister modalMovie" id="myModalMovie">
            <div class="modal-contentMovie">
                <span class="closeMovie">&times;</span>
                <form action="php/addFilme.php" method="post" enctype="multipart/form-data">
                    <label for="titulo">Título do Filme:</label><br>
                    <input type="text" id="titulo" name="titulo" maxlength="36"><br>
                    <label for="descricao">Descrição:</label><br>
                    <textarea name="descricao" id="descricao" cols="30" rows="3" maxlength="137"></textarea><br>


                    <label for="genero">Gênero:</label><br>
                    <div class="container-genero">
                        <div class="tag-container-genero">
                            <input type="text" id="g_autocomplete" name="genero"><br>
                        </div>
                    </div>


                    <label for="atoresPrincipais">Atores Principais:</label><br>
                    <div class="container">
                        <div class="tag-container">
                            <input type="text" id="atoresPrincipais" name="atores">
                        </div>
                    </div>



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


        <div class="filmes">



            <?php
            foreach ($array_card as $dados) {
                echo "<section class='card-movieItem meus-filmes'>";
                echo "<img class='img-capa' alt='capa do filme' src=" . $dados['url_capa'] . ">";
                echo "<p class='atualizacao'>15/07/2020</p>";
                echo "<div class='tituloSquare'><h2 class='tituloFinal'>";
                echo $dados['titulo'];
                echo "</h2></div>";
                echo "<p class='year'>" . $dados['anoEstreia'] . "</p>";
                echo "<div class='movieSquare'><p class='movieDescription'>" . $dados['descricao'] . "</p></div>";
                echo "<p class='genre'> <a href='#'>Gênero</a></p>";
                echo "<p class='principalsActors'>AtorUm / AtorDois</p>";
                echo "<p class='director'>Direção   : " . $dados['diretor'] . "</p>";
                echo "<div class='comentarioSquare'><img class='plus' src='img/plus.png' alt='Comentário Pessoal'>";
                echo "<p class='coments'>" . $dados['comentario'] . " </p></div>";
                echo "<p class='grade'>Nota: " . $dados['nota'] . " </p>"; ?>
                <div class='edit-delete'>
                    <input class='edit btn' type='button' value='editar'>
                    <form action="php/deleteMovie.php" method="POST" >
                        <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
                        <input class='delete btn' type='submit' value='excluir'>
                    </form>
                </div>
            <?php
                echo "</section>";
            }
            ?>

            <!-- MODELO -->
            <section class="card-movieItem meus-filmes">
                <img class="img-capa" src="img/filmeUm.jpg" alt="dirtyDancing">
                <p class="atualizacao">15/07/2020</p>
                <div class='tituloSquare'>
                    <h2>Dirty Dancing</h2>
                </div>
                <p class="year">1987</p>
                <div class="movieSquare">
                    <p class="movieDescription">O filme é sobre as férias de verão de Baby, uma jovem mulher que encontra
                        seu
                        verdadeiro amor em um dançarino. </p>
                </div>
                <p class="genre"> <a href="#"> Romance</a></p>
                <p class="principalsActors">Patrick Swayse / Jennifer Grey</p>
                <p class="director">Direção: Emile Ardolino</p>
                <div class="comentarioSquare">
                    <img class="plus" src="img/plus.png" alt="Comentário Pessoal">
                    <p class="coments">Top 10 dos meus filmes
                        preferidos</p>
                </div>

                <p class="grade"> Nota: 10</p>
                <div class='edit-delete'>
                    <input class='edit btn' type='button' value='editar'>
                    <form action="php/deleteMovie.php" method="POST" >
                        <input class='delete btn' type='submit' value='excluir'>
                    </form>
                </div>

            </section>
            <!-- FIM DO MODELO -->
        </div>

    </main>


    <!-- <script src="js/cardMovie.js"></script> -->
    <script src="js/login.js"></script>
    <script src="js/cadastro.js"></script>
    <script src="js/addMovie.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/autoCompleteGeneros.js"></script>
    <script src="js/tagInputActor.js"></script>
    <script src="js/help.js"></script>


</body>

</html>


<!-- <label for="genero">Gênero:</label><br>
                    <select name="genero" id="selecao-generos">
                        <option value=""></option>
                    </select><br> -->

<!-- 
                    <section class="card-movieItem">
            <img class="img-capa" alt="capa do filme">
            <p class="atualizacao">15/07/2020</p>
            <h2 class="tituloFinal"></h2>
            <p class="year"></p>
            <p class="movieDescription"></p>
            <p class="genre"> <a href="#"></a></p>
            <p class="principalsActors"></p>
            <p class="director"></p>
            <img class="plus" src="img/plus.png" alt="Comentário Pessoal">
            <p class="coments"> </p>
            <p class="grade"> </p>
            <input class="delete btn" type="button" value="editar">
            <input class="edit btn" type="button" value="excluir">
        </section> -->