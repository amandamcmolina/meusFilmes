<?php

include('connection.php');

$genero = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING); //Guardando em uma variável a pesquisa

$generos = $db->prepare("SELECT genero from generos WHERE genero LIKE '%".$genero."%' ORDER BY genero ASC");
$resultado = $generos->execute();


 $data = [];
 while ($row_generos = $generos->fetch(PDO::FETCH_ASSOC)) { //Devolvendo como um array associativo
     $data[] = $row_generos['genero'];
 }


echo json_encode($data);



