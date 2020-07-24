<?php
// include "addFilme.php";

$host = "mysql:host=localhost;dbname=meusfilmes;port=3306";
$user = "root";
$pass = "";


try{
    $db = new PDO($host, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ACESSAR ERROS DO SQL
    echo "Conexão feita com sucesso";
}catch(PDOException $e){
    echo "Erro na conexão com o banco de dados".$e->getMessage();
}catch(Exception $e){
    echo "Erro diferente".$e->getMessage();
}

// $query = $db->prepare("INSERT INTO movies (titulo) VALUES ('Filme Dois')");
// $resultado = $query->execute();

