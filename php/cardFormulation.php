<?php
    include('connection.php');

    $card = $db->prepare("SELECT titulo FROM movies");
    $resultado = $card->execute();

    $data_movies = [];
    while($row_movies = $card->fetch(PDO::FETCH_ASSOC)){
        $data_movies[] = $row_movies['titulo'];
    }
    echo "<pre>";
    var_dump($data_movies);
    echo $data_movies;




?>