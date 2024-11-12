<?php
    $server = "localhost";
    $username = "acanchorestaurante";
    $password = "localhost1.";
    $dbname = "acancho_restaurante"; 
    $mysqli = new mysqli($server, $username, $password, $dbname);
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
mysqli_set_charset($mysqli, "utf8");
?>