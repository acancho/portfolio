<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FilmFun | Peliculas</title>
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
      // Obtener la página actual de la URL o establecer en 1 si no está definida
      $pagina_actual = isset($_GET['page']) ? (int)$_GET['page'] : 1;

      // URL de la API con el parámetro de página
      $url_api = 'https://api.themoviedb.org/3/movie/popular?api_key=4b8385530cd0d39b1cc2b6634901d305&page=' . $pagina_actual;

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
          echo 'Error al obtener los datos de la API.';
        }
      }

      $total_paginas = isset($respuesta_decodificada['total_pages']) ? $respuesta_decodificada['total_pages'] : 1;
      ?>

      <!-- /////////////////////////////////////////////////////////////////////////////// -->

      <?php
      include "includes/conexion.php";

      // Obtener la ID del cine desde la URL
      $id_cine = $_GET["id"];

      // Consulta para obtener información del cine
      $sql_cine = "SELECT * FROM cines WHERE id='$id_cine'";
      $resultado_cine = mysqli_query($mysqli, $sql_cine);

      $cine_info = null; // Variable para almacenar la información del cine

      if (mysqli_num_rows($resultado_cine)) {
        $cine_info = $resultado_cine->fetch_assoc();
      } else {
        echo "Cine no encontrado.";
      }

      ?>



      <main id="main">
        <?php
        if (isset($respuesta_decodificada['results'])) {
          foreach ($respuesta_decodificada['results'] as $fila) {
            echo '<a href="butacas.php?id_cine=' . $id_cine . '&id_pelicula=' . $fila['id'] . '">';
            echo '<div class="movie">';
            echo '<img src="https://image.tmdb.org/t/p/w500' . $fila['poster_path'] . '" alt="Poster">';
            echo '<div class="movie-info">';
            echo '<h3>' . $fila['title'] . '</h3>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
          }
        }
        ?>
      </main>
      <footer>
        <div class="paginas">
          <?php if ($pagina_actual > 1) : ?>
            <a class="boton" href="?page=<?php echo ($pagina_actual - 1); ?>">&laquo; Anterior</a>
          <?php endif; ?>

          <?php if ($pagina_actual < $total_paginas) : ?>
            <a class="boton" href="?page=<?php echo ($pagina_actual + 1); ?>">Siguiente &raquo;</a>
          <?php endif; ?>
        </div>









        <style>
          @import url("https://fonts.googleapis.com/css?family=poppins:200,400,700&display=swap");

          * {
            box-sizing: border-box;
          }

          :root {
            --primary-color: black;
            --secondary-color: #dc3545;
          }

          .search {
            background-color: transparent;
            border: 2px solid var(--primary-color);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 1rem;
            color: #fff;
            font-family: inherit;
          }

          .search:focus {
            outline: 0;
            background-color: var(--primary-color);
          }

          .search::placeholder {
            color: #7378c5;
          }

          .paginas {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0;
            background-color: var(--secondary-color);
          }

          .boton {
            padding: 0.5rem 1rem;
            margin: 0 10px;
            text-decoration: none;
            color: white;
            background-color: var(--primary-color);
            border-radius: 5px;
            transition: background-color 0.3s ease;
          }

          .boton:hover {
            background-color: #373b69;
          }

          main {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
          }

          .movie-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
          }

          .movie {
            position: relative;
            overflow: hidden;
            border: 2px solid #dc3545;
            /* Ajusta el color del borde según tu preferencia */
            width: 18%;
            /* Ajusta el ancho de cada película según tu preferencia */
            margin-bottom: 20px;
            /* Ajusta la separación entre películas según tu preferencia */
          }

          .movie img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            transition: transform 0.3s;
            
          }

          .movie-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.7);
            /* Fondo semitransparente para el título */
            color: #eee;
            padding: 0.5rem 1rem;
            letter-spacing: 0.5px;
            transition: backdrop-filter 0.3s;
            backdrop-filter: blur(0);
          }

          .movie h3 {
            margin: 0;
            max-width: calc(100% - 2rem);
            /* Ajusta el ancho máximo del h3 para que quepa en el contenedor */
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
          }

          .movie:hover img {
            transform: scale(1.2);
          }

          .movie:hover .movie-info {
            backdrop-filter: blur(10px);
          }

          @media (max-width: 1200px) {
            .movie {
              width: 23%;
              /* Ajusta el ancho de cada película para dispositivos más pequeños */
            }
          }

          @media (max-width: 991px) {
            .movie {
              width: 30%;
              /* Ajusta el ancho de cada película para dispositivos aún más pequeños */
            }
          }

          @media (max-width: 767px) {
            .movie {
              width: 48%;
              /* Ajusta el ancho de cada película para dispositivos pequeños */
            }
          }

          .movie:hover .movie-info {
            backdrop-filter: blur(10px);
          }

          .movie-info span {
            background-color: var(--primary-color);
            padding: 0.2rem 0.5rem;
            border-radius: 3px;
            font-weight: bold;
          }

          .movie-info span.green {
            color: lightgreen;
          }

          .movie-info span.orange {
            color: orange;
          }

          .movie-info span.red {
            color: red;
          }

          .overview {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            padding: 1rem;
            max-height: 100%;
            transform: translateY(101%);
            transition: transform 0.3s ease-in;
          }

          .movie:hover .overview {
            transform: translateY(0);
          }
        </style>






    </div>

  </div>
  <!-- CIERRA EL DIV GENERAL -->

  <!-- TERMINA CONTENIDO   -->

  <!-- EMPIEZA FOOTER -->

  <?php
  include "includes/footer.php";
  ?>
  </div>
  <script type="text/javascript" src="script.js"></script>
  <!-- TERMINA FOOTER   -->

  <script src="js/bootstrap.bundle.js"></script>
  <!-- <script src="js/javascript.js"></script> -->
</body>

</html>