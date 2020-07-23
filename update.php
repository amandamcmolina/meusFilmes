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

$query = $db->prepare("INSERT INTO movies (titulo) VALUES ('Filme Dois')");
$resultado = $query->execute();





// try {
//     $db = new PDO($host, $user, $pass);
// } catch (PDOException $e) {
//     echo "Erro com banco de dados" . $e->getMessage();
// } catch (Exception $e) {
//     echo "Outro tipo de erro" . $e->getMessage();
// }




// try {
//     $resultado = print_r($db->query('SELECT * from movies'));
//     $db = null;
//     echo $resultado;
// } catch (Exception $e) {
//     echo "Erro no insert" . $e->getMessage();
// }




// $query = $db->prepare("SELECT COUNT(*) FROM movies;");
// $query->execute();
// $resultado = $query->fetch(PDO::FETCH_ASSOC);
// echo "Qualquer coisa";
// echo $resultado;



// $db->query();


//  var_dump($db);
// // var_dump($query);

// 127.0.0.1
