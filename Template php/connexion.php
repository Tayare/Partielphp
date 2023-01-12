<?php
  //connexion à la base de données

    $servername = 'localhost';
    $password = 'root';
    $database = 'partielphp'
  
    $conn = new mysqli($servername, $password, $database);
  
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
  }

?>