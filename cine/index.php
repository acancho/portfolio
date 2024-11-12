<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FilmFun</title>
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

    <?php
    // Obtener la página actual de la URL o establecer en 1 si no está definida
    $pagina_actual = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // URL de la API con el parámetro de página
    $url_api = 'https://api.themoviedb.org/3/movie/popular?api_key=4b8385530cd0d39b1cc2b6634901d305&page='.rand(1, 55);

    $peticion = curl_init();
    curl_setopt($peticion, CURLOPT_URL, $url_api);
    curl_setopt($peticion, CURLOPT_RETURNTRANSFER, true);

    $respuesta = curl_exec($peticion);
    curl_close($peticion);

    if (curl_errno($peticion)) {
      echo 'Error en Curl: ' . curl_error($peticion);
    } else {
      $respuesta_decodificada = json_decode($respuesta, true);
      if (!isset($respuesta_decodificada['results'])) {
        echo 'No se ha podido mostrar los datos.';
      }
    }

    $total_paginas = isset($respuesta_decodificada['total_pages']) ? $respuesta_decodificada['total_pages'] : 1;
    ?>

    

    <main id="main">
      <?php
      if (isset($respuesta_decodificada['results'])) {
        $contador = 0;
        echo '<div class="slider">';
        echo '<div class="popular-movies">';
        echo '<div class="movie-container">';
        foreach ($respuesta_decodificada['results'] as $fila) {
          if ($contador >= 10) {
            break;
          }
          echo '<div class="image-effect">';
          echo '<div class="movie-image"><img src="https://image.tmdb.org/t/p/w500' . $fila['poster_path'] . '" alt="' . $fila['title'] . '" class="zoom">';
        
          echo '<h2 class="movie-title">' . $fila['title'] . '</h2>';
          
          echo '</div>';
          echo '</div>';
          $contador++;
        }
        
        echo '</div>';
        echo '</div>';
        echo '</div>';
      }
      ?>
    </main>
    <script type="text/javascript" src="script.js"></script>

    <div class="row">
    <div class="col-12">
        <hr class="red-divider">
    </div>
</div>
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12 image-container">
        <img src="img/fondoTexto.png" alt="una imagen de fondo negro de ladrillos" class="img-fluid fondoTexto">
        <p class="centered-text text-center">Ven a disfrutar de los últimos estrenos en <span class="highlight">3D</span>.</p>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12">
        <img src="img/personas3d.png" alt="unos chicos con gafas 3D" class="img-fluid personas3D">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <hr class="red-divider">
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