<?php

include('Movie.php');

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

$novoFilme = new Movie($id, $titulo, $descricao, $atores, $diretor, $ano, $comentario, $nota, $genero, $capa);

//Salvar img em pasta

$date = new DateTime();
$timestamp = $date->getTimestamp();

$capaSalva = $novoFilme->capa_tmp_name;
$capaNome = $novoFilme->titulo . $timestamp . '.jpg';
$dir = 'capas/';
move_uploaded_file($capaSalva, $dir . $capaNome);

$novoFilme->setUrlCapa($dir . $capaNome);

// $json = json_encode($novoFilme);
// file_put_contents('movies.json', $json);

header('location:index.html');
