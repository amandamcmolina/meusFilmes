<?php

//SALVAR DADOS NO MYSQL

include('Movie.php');
include('connection.php');

//PASSING INFORMATIONS ABOUT DE MOVIE
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$atores = $_POST['atoresPrincipais'];
$diretor = $_POST['diretor'];
$ano = $_POST['ano'];
$comentario = $_POST['comentario'];
$nota = $_POST['nota'];
$genero = $_POST['genero'];
$capa = $_FILES['capa'];



echo $atores;





$novoFilme = new Movie($titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa);


//SAVING img in the folder "capas"
$date = new DateTime();
$timestamp = $date->getTimestamp();

$capaSalva = $novoFilme->capa_tmp_name;
$capaNome = $novoFilme->capa_name . $timestamp . '.jpg';

$dir = '../capas/';
move_uploaded_file($capaSalva, $dir . $capaNome);

$novoFilme->setUrlCapa($dir . $capaNome);
$url_capa = $novoFilme->url;


//SAVING THE DATAS IN THE data bank
$query = $db->prepare("INSERT INTO movies (titulo, descricao, diretor, anoEstreia, comentario, nota, url_capa) VALUES (:t, :de, :di, :a, :c, :n, :u)");

$query->bindValue(":t", $novoFilme->titulo);
$query->bindValue(":de", $novoFilme->descricao);
$query->bindValue(":di", $novoFilme->diretor);
$query->bindValue(":a", $novoFilme->ano);
$query->bindValue(":c", $novoFilme->comentario);
$query->bindValue(":n", $novoFilme->nota);
$query->bindValue(":u", $novoFilme->url);
$query->execute();


header('location:../index.php');






// $json = json_encode($novoFilme);
// file_put_contents('movies.json', $json);