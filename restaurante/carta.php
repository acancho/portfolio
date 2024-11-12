<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>La Abuela</title>
	<link rel="shortcut icon" href="img/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">


</head>

<body>
  <?php
  include "nav.php";
  ?>

  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/carta.php';
      }
    });
  </script>

  <div class="container">
    <h1>Carta</h1>
    <div class="container">
      <a href="carta.php" class="btn btn-lg m-3 active" role="button">Completa</a>
      <a href="comida.php" class="btn btn-lg m-3" role="button">Comida</a>
      <a href="bebida.php" class="btn btn-lg m-3" role="button">Bebida</a>
    </div>

    <style>
      .btn.active {
        border: 2px solid #000;
        background-color: orange;
      }
    </style>

    <br>

    <?php
    include "conexion.php";

    // Configuramos el número de registros que se mostrarán por página.
    $tamanio_pagina = 8;

    // Comprobamos si llega alguna variable por GET con la página.
    $pagina = (isset($_GET["pagina"]) && is_numeric($_GET["pagina"])) ? $_GET["pagina"] : 1;

    // Calculamos el primer registro que debemos comenzar a mostrar.
    $inicio = ($pagina - 1) * $tamanio_pagina;

    // Hacemos la consulta sql indicando el límite de registros por página.
    $sql = "SELECT * FROM carta LIMIT " . $inicio . "," . $tamanio_pagina;

    $resultado = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($resultado)) {
      echo "<div class='row'>";

      while ($fila = $resultado->fetch_assoc()) {
        echo "<div class='col-sm-6 col-md-4 col-lg-3 mb-4'>";
        echo "  <div class='card' style='min-height: 500px;'>";
        echo "    <img src='img/" . $fila["imagen"] . "' alt='Foto' class='card-img' style='width: 100%; height: auto'>";
        echo "    <div class='card-body'>";
        echo "      <h5 class='card-title'>" . $fila['titulo'] . "</h5>";
        echo "      <p class='card-text'>" . $fila['descripcion'] . "</p>";
        echo "      <p class='card-text'>" . $fila["precio"] . "€</p>";
        echo "    </div>";
        echo "  </div>";
        echo "</div>";
      }

      echo "</div>";

      // Paginación
      $sql_total = "SELECT COUNT(*) as total FROM carta";
      $resultado_total = mysqli_query($mysqli, $sql_total);
      $fila_total = mysqli_fetch_assoc($resultado_total);
      $total_registros = $fila_total["total"];
      $total_paginas = ceil($total_registros / $tamanio_pagina);

      echo "<nav class='mt-4' aria-label='Page navigation example'>";
      echo "  <ul class='pagination justify-content-center'>";

      for ($i = 1; $i <= $total_paginas; $i++) {
        if ($i == $pagina) {
          echo "    <li class='page-item active'><span class='page-link'>$i</span></li>";
        } else {
          echo "    <li class='page-item'><a class='page-link' href='carta.php?pagina=$i'>$i</a></li>";
        }
      }

      echo "  </ul>";
      echo "</nav>";
    } else {
      echo "<p>Sin resultados</p>";
    }
    ?>

    <style>
      .mb-4 {
        margin-bottom: 1.5rem;
      }

      .col-md-3 {
        width: 25%;

        margin-bottom: 15px;
        /* Add some spacing between columns */
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 5px;
      }

      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      }

      .card-img {
        border-radius: 5px 5px 0 0;
        width: 100%;
      }

      .card-body {
        padding: 2px 16px;
      }

      .card-title {
        color: #000;
        font-size: 22px;
      }

      .card-text {
        color: #000;
        font-size: 18px;
      }
    </style>

  </div>

  <!-- Remove the container if you want to extend the Footer to full width. -->
  <?php
  include "footer.php";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>