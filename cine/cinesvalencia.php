<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Cines Valencia</title> 
    <link rel="shortcut icon" href="img/favicon.png" />   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  </head>
  
  <body>
<!-- EMPIEZA MENU -->   

<?php
session_start();

if (isset($_SESSION["usuario"])) {
    // La sesión está iniciada, mostrar menu2.php
    include "includes/menu2.php";
} else {
    // La sesión no está iniciada, mostrar menu.php
    include "includes/menu.php";
}
?>
  
<!-- TERMINA MENU -->

<!-- EMPIEZA CONTENIDO -->
  <div class="container fondonegro contenido">
    <div class="row">
    <?php
include "includes/conexion.php";

$sql = "SELECT * FROM cines WHERE provincia = 'Valencia'";
$resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado)) {
    echo "<div class='row row-cols-1 row-cols-md-3'>"; // Inicio del contenedor de las tarjetas

    while ($fila = $resultado->fetch_assoc()) {
      echo "<div class='col mb-4'>"; // Columna que ocupará 1/3 del ancho en dispositivos medianos y grandes
      echo "<div class='card bg-dark text-white'>"; // Tarjeta con fondo negro y texto blanco
      echo "<div style='height: 200px; overflow: hidden;'>"; // Contenedor para limitar la altura de la imagen
      echo "<img src='img/" . $fila["imagen"] . "' class='card-img-top' style='object-fit: cover; width: 100%; height: 100%;' alt='...'>"; // Imagen con tamaño fijo y recorte
      echo "</div>"; // Fin del contenedor de la imagen
      echo "<div class='card-body'>";
      echo "<h5 class='card-title'>" . $fila['nombre'] . "</h5>"; // Nombre del cine
      echo "<p class='card-text'>" . $fila['direccion'] . "</p>"; // Dirección
      echo "<p class='card-text'>" . $fila['provincia'] . "</p>"; // Provincia
      echo "<a href='peliculas.php?id=" . $fila['id'] . "' class='btn btn-danger'>Comprar entradas</a>"; // Botón para comprar entradas
      echo "</div>";
      echo "</div>";
      echo "</div>"; // Fin de la columna
    }

    echo "</div>"; // Fin del contenedor de las tarjetas
}
?>

                
    </div>
  </div>
  <!-- CIERRA EL DIV GENERAL -->
 
<!-- TERMINA CONTENIDO   -->

<!-- EMPIEZA FOOTER -->

    <?php
        include "includes/footer.php";
    ?>
 </div>  
<!-- TERMINA FOOTER   -->

    <script src="js/bootstrap.bundle.js"></script>
    <!-- <script src="js/javascript.js"></script> -->
  </body>
</html>