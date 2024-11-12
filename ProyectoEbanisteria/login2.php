<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Somos una ebanistería especializada en la creación de muebles de madera a medida, desde elegantes mesas hasta intricados armarios. ¡Descubre la belleza de nuestros diseños artesanales!">
    <meta name="keywords" content="ebanistería, muebles de madera, diseño de muebles, carpintería, muebles a medida">
    <meta name="Adrian Cancho" content="Ebanisteria Ramirez y Adrian Cancho">
    <meta property="og:title" content="Descubre los Exquisitos Muebles de Madera Hechos a Mano en nuestra Ebanistería">
    <meta property="og:description" content="Explora nuestra colección de muebles únicos hechos a mano con madera de la más alta calidad. ¡Encuentra el complemento perfecto para tu hogar!">
    <meta name="robots" content="no-index, no-follow">


    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" />
    <title>
        <?php
$url_actual = $_SERVER['REQUEST_URI'];

// Encuentra la posición de la primera barra
$primer_barra = strpos($url_actual, '/') + 1;

// Encuentra la posición de la segunda barra
$segunda_barra = strpos($url_actual, '/', $primer_barra + 1);

// Si se encontró una segunda barra
if ($segunda_barra !== false) {
    // Extrae la parte de la URL después de la segunda barra
    $parte_desde_segunda_barra = substr($url_actual, $segunda_barra + 1);
    
    // Encuentra la posición del último punto
    $ultimo_punto = strrpos($parte_desde_segunda_barra, '.');

    // Si se encontró un punto
    if ($ultimo_punto !== false) {
        // Extrae la parte de la URL desde el último punto hacia atrás
        $parte_deseada = substr($parte_desde_segunda_barra, 0, $ultimo_punto);
        $parte_deseada = ucfirst($parte_deseada);
        echo $parte_deseada . " | Ebanistería Ramirez";
    } else {
        // Si no se encontró un punto, muestra un mensaje indicando que no se pudo encontrar
        echo "No se encontró un punto en la parte de la URL después de la segunda barra.";
    }
} else {
    // Si no se encontró una segunda barra, muestra un mensaje indicando que no se pudo encontrar
    echo "No se encontró la segunda barra en la URL.";
}
?>
    </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- NAV -->
            
            </div>
        </div>
    </div>
    <br><br>
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
        echo '<script type="text/javascript">location.href="crud.php"</script>';
    }else{
        echo '<script type="text/javascript">location.href="login.php"</script>';
    }
?>
    <br><br>

    <div class="container-fluid">
        <!-- FOOTER -->
        
        <!-- FIN DE FOOTER -->
    </div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>