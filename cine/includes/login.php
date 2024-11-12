<?php
    $server = "localhost";
    $username = "cine";
    $password = "SandraGuapa00";
    $dbname = "acancho_cine";
    $mysqli = new mysqli($server, $username, $password, $dbname);
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
?>