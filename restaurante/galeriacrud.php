<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<title>La Abuela</title>
	<link rel="shortcut icon" href="img/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet" />
</head>

<body>
<?php
  include "nav.php";
  ?>
  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/galeriacrud.php';
      }
    });
  </script>
  <br />

  <div class="container text-center">
    <section class="container">
      <h1 class="my-4 text-center text-lg-left">Galeria de imagenes</h1>
      <?php


include "conexion.php";

$sql = "SELECT * FROM fotos";
echo "<a class='nav-linkk' href='nuevagaleria.php'>
<div class='nueva' style='text-align: center; background-color: #ff8903; color: white; padding: 10px; border-radius: 5px; width: 150px;'>
Añadir fotos
</div>
</a>";
echo "<br>";
$resultado = mysqli_query($mysqli, $sql);

if (mysqli_num_rows($resultado)) {

  while ($fila = $resultado->fetch_assoc()) {
    echo "<div class='col-sm-6 col-md-4 col-lg-3 mb-4'>";

    


    echo "<img src='img/" . $fila["foto"] . "' alt='Foto' class='card-img img-darken' style='width: 100%; height: auto;'>";
    echo "<br>";
    echo "<br>";
    echo "<a href='eliminargaleria.php?id=" . $fila['id'] . "' class='btn btn-danger darken-btn'>Eliminar</a>";
    echo "<br>";
    echo "<br>";
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
    
  }
  .img-darken {
    transition: all 0.5s ease;
}

.darken-btn:hover + .img-darken {
    opacity: 0;
}

</style>
  <br /><br /><br />
  </div>
  </div>
  <!-- *********************************************************************************************************************************************** -->
  <div style="clear: both;"></div>
  <?php
  include "footer.php";
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>