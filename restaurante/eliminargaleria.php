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
        window.location.href = 'ingles/galeria.php';
      }
    });
  </script>
  <br>
  <div class="container text-center">
    <?php

    $id = $_GET['id'];
    include "conexion.php";




    // Realizamos la consulta con DELETE para seleccionar el elemento que vamos a eliminar.
    $sql = "DELETE FROM fotos WHERE id='$id'";
    if (mysqli_query($mysqli, $sql)) {
      echo "<div class='col-12'>
            <h2>Producto eliminado correctamente</h2><a class='btn btn-primary' href='galeriacrud.php'>Volver atrás</a></div>
    </div>";
      echo "<br>";
    } else {
      echo "Error al eliminar registro: " . mysqli_error($mysqli);
    }
    ?>
    <br><br><br>



    <!-- *********************************************************************************************************************************************** -->


    <div style="clear: both;"></div>
    <!-- El div con style="clear: both;" asegura que el pie de página se coloque después de todos los elementos flotantes anteriores, evitando así la superposición. -->
    </div>
  <?php
  include "footer.php";
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>