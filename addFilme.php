<?php
    
    include ('Movie.php');
    
    $id = rand(1, 100);
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $atores = $_POST['atoresPrincipais'];
    $diretor = $_POST['diretor'];
    $ano = $_POST['ano'];
    $comentario = $_POST['comentario'];
    $nota = $_POST['nota'];
    $genero = $_POST['genero'];
    $capa = $_FILES['capa'];

    echo $capa;

    echo $genero;
    
    
    $novoFilme = new Movie($id, $titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa);
    
    echo "<pre>";
    
    var_dump($novoFilme);
    echo "<br>";


    $json = json_encode($novoFilme);
    file_put_contents('movies.json', $json);

    //Salvar img em pasta
    
    $capaSalva = $novoFilme->capa_tmp_name;
    $capaNome = $novoFilme->capa_name;
    $dir = 'capas/';
    move_uploaded_file($capaSalva, $dir.$capaNome);

    header('location:index.html');

    

?>