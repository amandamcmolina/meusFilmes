<?php
    include('connection.php');

        $card = $db->prepare("SELECT * FROM movies");
        $card->execute();
        $array_card = $card->fetchAll(PDO::FETCH_ASSOC);