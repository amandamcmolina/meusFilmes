<?php

    include('connection.php');

    $id_movie = $_POST['id_up'];
    
    

    //buscar os dados do banco de dados
        function searchDatasMovie($id_movie, $db){
            $conjuntoDadosMovie = [];
            $query = $db->prepare("SELECT * FROM movies WHERE id = :id");
            $query->bindValue(":id", $id_movie);
            $query->execute();

            $conjuntoDadosMovie = $query->fetch(PDO::FETCH_ASSOC);
            return $conjuntoDadosMovie;
            header('location:../index.php');
        }

        $resultado = searchDatasMovie($id_movie, $db);
       
    //atualizar dados no banco de dados
        // function upDateMovie(){

        // }
   

        

?>