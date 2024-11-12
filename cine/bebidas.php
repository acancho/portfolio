<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Bebidas</title> 
    <link rel="shortcut icon" href="img/favicon.png" />   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
      
      // Configuración de la paginación
      $resultados_por_pagina = 3; // Define cuántos resultados mostrar por página
      $total_resultados = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM bebida"));
      $total_paginas = ceil($total_resultados / $resultados_por_pagina); // Calcula el número total de páginas
      
      // Obtiene el número de página actual
      $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
      $inicio = ($pagina_actual - 1) * $resultados_por_pagina; // Calcula el inicio del conjunto de resultados para la página actual
      
      $sql = "SELECT * FROM bebida LIMIT $inicio, $resultados_por_pagina";
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
          echo "<h5 class='card-title'>" . $fila['titulo'] . "</h5>"; // Nombre del cine
          echo "<p class='card-text'>" . $fila['descripcion'] . "</p>"; // Dirección
          echo "<p class='card-text'>" . $fila['precio'] . "</p>"; // Provincia          
          echo "</div>";
          echo "</div>";
          echo "</div>"; // Fin de la columna
        }

        echo "</div>"; // Fin del contenedor de las tarjetas

        // Mostrar controles de paginación
        echo "<div class='row'>";
        echo "<div class='col'>";
        echo "<nav aria-label='Page navigation example'>";
        echo "<ul class='pagination justify-content-center'>";

        // Mostrar botón 'Anterior'
        if ($pagina_actual > 1) {
          echo "<li class='page-item'><a class='page-link' href='?pagina=" . ($pagina_actual - 1) . "'>&laquo;</a></li>";
        }

        // Mostrar botones de las páginas
        for ($i = 1; $i <= $total_paginas; $i++) {
          echo "<li class='page-item " . ($i == $pagina_actual ? 'active' : '') . "'><a class='page-link' href='?pagina=" . $i . "'>" . $i . "</a></li>";
        }

        // Mostrar botón 'Siguiente'
        if ($pagina_actual < $total_paginas) {
          echo "<li class='page-item'><a class='page-link' href='?pagina=" . ($pagina_actual + 1) . "'>&raquo;</a></li>";
        }

        echo "</ul>";
        echo "</nav>";
        echo "</div>";
        echo "</div>";
      } else {
        echo "<p>No se encontraron resultados.</p>";
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






