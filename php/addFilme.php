<?php

//SALVAR DADOS NO MYSQL
include('Movie.php');
include('connection.php');

//PASSING INFORMATIONS ABOUT THE MOVIE
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$atores = $_POST['atoresPrincipais'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$comentario = $_POST['comentario'];
$nota = $_POST['nota'];
$genero = $_POST['genero'];
$capa = $_FILES['capa'];



$novoFilme = new Movie($titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa, $id);

//SAVING img in the folder "capas"
$novoFilme->registerCoverMovie();

//SAVING THE DATAS IN THE data bank
// $msg = "Filme criado com sucesso";
// if($novoFilme->checkRegister($db) == false){
//     $msg = "Filme já cadastrado. Tente novamente.";
// }
if($novoFilme->checkRegister($db)){
    $msg = "Já existe";
}else{
    $novoFilme->registerMovie($db);
    $msg = "Filme criado com sucesso";
}



header('location:../index.php?msg='.$msg);






// $json = json_encode($novoFilme);
// file_put_contents('movies.json', $json);