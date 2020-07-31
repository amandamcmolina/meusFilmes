<?php
    include('connection.php');



    
        $card = $db->prepare("SELECT * FROM movies");
        $card->execute();
        $array_card = $card->fetchAll(PDO::FETCH_ASSOC);
        

    //     echo "<pre>";
    //     var_dump($array_card);
    
    
    // echo $array_card[0]["id"];
    //  print_r($array_card);
    //  foreach($array_card as $dados){
    //      echo "<br>";
    // //      echo "<div>";
    //      foreach($dados as $key => $value){
    // //          echo "<h1>".$value->titulo."</h1>";
    //            echo $key.": ".$value."<br>";
    //       }
    // //      echo "</div>";
        
    //  };

    
    //  echo "<br>";
    //  echo json_encode($array_card);
