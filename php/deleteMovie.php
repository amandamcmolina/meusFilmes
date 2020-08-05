<?php 
include('connection.php');


    $id = $_POST['id'];
  
  

    $query = $db->prepare("DELETE FROM movies WHERE id = :id");
    $query->bindValue(":id", $id);
    $query->execute();

    header('location:../index.php');

?>