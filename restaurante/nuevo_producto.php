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
        window.location.href = 'ingles/nuevo_producto.php';
      }
    });
  </script>

  <br>
  <div class="container text-center">
    <?php
    // Almacenamos en variables los valores necesarios para guardar el archivo adjunto.

    $archivo_nombre = $_FILES["archivo"]["name"]; // Nombre del archivo adjunto (es el nombre que tiene el archivo que adjunta el usuario incluyendo la extensión).
    $archivo_tipo = $_FILES["archivo"]["type"]; // Tipo de archivo (jpg, png, pdf, doc...). No es necesario para guardar el archivo pero podemos hacer validación para restringir el tipo de arhivo.
    $archivo_tamanio = $_FILES["archivo"]["size"]; // Tamaño del archivo en bytes. No es necesario para guardar el archivo pero podemos hacer validación para restringir el tamaño máximo.
    $archivo_ruta_temporal = $_FILES["archivo"]["tmp_name"]; // Ruta temporal del archivo.

    if (move_uploaded_file($archivo_ruta_temporal, "img/" . $archivo_nombre)) {
    } else {
      echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
    }
    ?>
    <?php

    include "conexion.php";
    if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    // Guardamos los datos del formulario en variables.
    // Almacenamos en variables los datos que llegan del formulario.
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $titulo_en = $_POST['titulo_en'];
    $descripcion = $_POST['descripcion'];
    $descripcion_en = $_POST['descripcion_en'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];
    $tipo_en = $_POST['tipo_en'];


    // Consulta a la base de datos.
    $sql = "INSERT INTO carta (titulo, titulo_en, descripcion ,descripcion_en, precio, imagen, tipo, tipo_en ) VALUES ('$titulo','$titulo_en','$descripcion','$descripcion_en','$precio','$archivo_nombre','$tipo','$tipo_en')";

    // Comprobamos si el registro se ha guardado correctamente y en caso de error lo mostramos.
    if (mysqli_query($mysqli, $sql)) {
      echo "<div class='row'>
                <div class='col'>
                    <h2>Registro guardado correctamente</h2><a class='btn btn-primary' href='crud.php'>Volver atrás</a> 
                </div>";
      echo "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    ?>

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