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
<a id="top"></a>
<body>
<?php
  include "nav.php";
  ?>
  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/crud.php';
      }
    });
  </script>

  <br>
  <div class="container text-center">
    <?php


    include "conexion.php";

    $sql = "SELECT * FROM carta";

    $resultado = mysqli_query($mysqli, $sql);
    echo "
<style>
    .nav-linkk {
        text-decoration: none;
        background: white;
    }

    .nueva-container {
        display: flex;
        justify-content: space-around; /* Ajusta el espacio horizontal entre los elementos */
        align-items: center;
        flex-wrap: wrap; /* Para que los elementos se envuelvan si no hay suficiente espacio horizontal */
    }

    .nueva {
        text-align: center;
        background-color: #ff8903;
        color: white;
        padding: 10px;
        border-radius: 5px;
        width: 200px;
        transition: background-color 0.3s ease;
        margin-bottom: 20px; /* Ajusta la separación vertical entre los elementos */
        margin-left: -90px;
    }

    .nueva:hover {
        background-color: orange;
    }
</style>";

echo "
<div class='nueva-container'>
    <a class='nav-linkk' href='nueva.php'>
        <div class='nueva'>
            Nuevo producto
        </div>
    </a>

    <a class='nav-linkk' href='galeriacrud.php'>
        <div class='nueva'>
            Galería de imágenes
        </div>
    </a>
</div>";

    echo "<br>";
    if (mysqli_num_rows($resultado)) {

      while ($fila = $resultado->fetch_assoc()) {


        echo "<div class='col-sm-6 col-md-4 col-lg-3 mb-4'>";
        echo "  <div class='card' style='min-height: 530px;'>";
        echo "    <img src='img/" . $fila["imagen"] . "' alt='Foto' class='card-img' style='width: 100%; height: auto'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $fila['titulo'] . "</h5>";
        echo "<p class='card-text'>" . $fila['descripcion'] . "</p>";
        echo "<p class='card-text'>" . $fila["precio"] . "€</p>";
        echo "<p class='card-text'>" . $fila["tipo"] . "</p>";
        echo "<a href='editar.php?id=" . $fila['id'] . "' class='btn btn-primary'>Editar</a><p></p>";
        echo "<a href='eliminar.php?id=" . $fila['id'] . "' class='btn btn-danger'>Eliminar</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
    } else {

      echo "Sin resultados";
    }

    ?>
    <style>
      .col-md-3 {
        width: 25%;
      }

      .mb-4 {
        margin-bottom: 1.5rem;
        /* Ajusta este valor a tus necesidades */
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
      }

      .card-body {
        padding: 2px 16px;
        height: 110%;
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
    <br><br><br>



    <!-- *********************************************************************************************************************************************** -->

    </div>
    
    <div style="clear: both;"></div>
    <!-- El div con style="clear: both;" asegura que el pie de página se coloque después de todos los elementos flotantes anteriores, evitando así la superposición. -->
    <?php
  include "footer.php";
?>
<div style="position: fixed; bottom: 20px; right: 20px;">
        <a href="#top" class="btn btn-primary">Volver arriba</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>