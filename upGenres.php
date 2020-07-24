<?php

include('connection.php');

$genero = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

$generos = $db->prepare("SELECT genero from generos WHERE genero LIKE '%".$genero."%' ORDER BY genero ASC");
$generos->execute();
// $generos->bindValue(":ge", $genero);

while ($row_generos = $generos->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row_generos['genero'];
}

echo json_encode($data);
