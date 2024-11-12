<?php 	
    include "includes/conexion.php";
    $usuario = mysqli_real_escape_string($mysqli,$_POST["usuario"]); // Evitamos inyección SQL en el usuario
    $password = mysqli_real_escape_string($mysqli,$_POST["password"]); // Evitamos inyección SQL en la contraseña
    $query = "SELECT * FROM usuarios WHERE usuario='$usuario'"; // Realizamos la consulta SQL para tomar el usuario
    $consulta = mysqli_query($mysqli,$query); // Ejecutamos la consulta
    if($result = mysqli_query($mysqli,$query)){ // Comprobamos si el usuario existe en la BBDD
	    while($fila = mysqli_fetch_array($result)){
            $hash = $fila['password'];  // Si el usuario existe tomamos el password (hash) almacenado en la BBDD y lo guardamos en una variable
        }
    }
    if(password_verify($password, $hash)){ //Verificamos si la contraseña introducida coincide con el hash guardado en la base de datos
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo '<script type="text/javascript">location.href="index.php"</script>';
    }else{
        echo '<script type="text/javascript">location.href="login.php"</script>';
    }
?>