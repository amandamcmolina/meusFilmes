<?php
    
    include ('Movie.php');
    

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $atores = $_POST['atoresPrincipais'];
    $diretor = $_POST['diretor'];
    $ano = $_POST['ano'];
    $comentario = $_POST['comentario'];
    $nota = $_POST['nota'];
    
    
    $novoFilme = new Movie($titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota);

    echo "<pre>";
    
    var_dump($novoFilme);
    echo "<br>";


    $json = json_encode($novoFilme);
    file_put_contents('movies.json', $json);



?>