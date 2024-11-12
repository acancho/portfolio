<?php
$server = "localhost";
$username = "canchoo";
$password = "SegundoDAW";
$dbname = "acancho_tfg"; 

// Crear conexión
$mysqli = new mysqli($server, $username, $password, $dbname);

// Verificar conexión
if($mysqli->connect_errno){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Establecer el conjunto de caracteres
mysqli_set_charset($mysqli, "utf8");
?>
