<?php
    $server = "localhost";
    $username = "francisco";
    $password = "Zahirablue";
    $dbname = "acancho_ebanisteria"; 
    $mysqli = new mysqli($server, $username, $password, $dbname);
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    mysqli_set_charset($mysqli, "utf8");
?>