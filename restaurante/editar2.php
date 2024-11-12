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
  <!-- <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/editar.php';
      }
    }); -->
  </script>
  <br>
  <div class="container text-center">
    <h1 class="text-center">Editar tarea</h1>
    <div class="row">
      <div class="col-12">
        <?php
        // Conexión con la base de datos.
        include "conexion.php";
        if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        ?>
        <?php

        // Almacenamos en variables los datos que llegan del formulario.
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $titulo_en = $_POST['titulo_en'];
        $descripcion = $_POST['descripcion'];
        $descripcion_en = $_POST['descripcion_en'];
        $precio = $_POST['precio'];
        $tipo = $_POST['tipo'];
        $tipo_en = $_POST['tipo_en'];


        // Creamos la consulta de actualización con UPDATE. 
        $sql = "UPDATE carta SET titulo='$titulo',titulo_en='$titulo_en', descripcion='$descripcion',descripcion_en='$descripcion_en', precio='$precio', tipo='$tipo',tipo_en='$tipo_en' WHERE id='$id'";
        if (mysqli_query($mysqli, $sql)) {
          echo "<br><div class='col'>
                <h2>Registro actualizado correctamente</h2><a class='btn btn-primary' href='crud.php'>Volver atrás</a> 
            </div>";
          echo "<br>";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        ?>

      </div>
      <br><br><br>







      <!-- *********************************************************************************************************************************************** -->




      </div>

      <!-- Remove the container if you want to extend the Footer to full width. -->
      <?php
  include "footer.php";
?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>