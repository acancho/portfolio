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
    <h1 class="text-center">Editar producto</h1>
    <div class="row">
      <div class="col-12">
        <?php
        // Conexión con la base de datos.
        $id = $_GET['id'];
        include "conexion.php";
        if ($mysqli->connect_errno) {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        ?>
        <?php

        $sql = "SELECT * FROM carta WHERE id='$id'";
        $resultado = mysqli_query($mysqli, $sql);
        if (mysqli_num_rows($resultado)) {
          while ($fila = mysqli_fetch_assoc($resultado)) {
        ?>
            <!-- También podríamos crear todo el formulario dentro de un echo a continuación del while -->
            <form method="POST" action="editar2.php">
              <input type="hidden" id="id" name="id" value="<?php echo $fila['id']; ?>">
              <label for="titulo" class="form-label"><strong>Título:</strong></label>
              <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $fila['titulo']; ?>">
              <label for="titulo_en" class="form-label"><strong>Título Ingles:</strong></label>
              <input type="text" class="form-control" id="titulo" name="titulo_en" value="<?php echo $fila['titulo']; ?>">
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label"><strong>Descripcion:</strong></label>
        <input type="text" class="form-control" name="descripcion" value="<?php echo $fila['descripcion']; ?>">

      </div>
      <div class="mb-3">
        <label for="descripcion_en" class="form-label"><strong>Descripcion Ingles:</strong></label>
        <input type="text" class="form-control" name="descripcion_en" value="<?php echo $fila['descripcion']; ?>">

      </div>
      <div class="mb-3">
        <label for="precio" class="form-label"><strong>Precio</strong></label>
        <input type="text" class="form-control" name="precio" value="<?php echo $fila['precio']; ?>">
      </div>
      <div class="mb-3">
    <label for="tipo" class="form-label"><strong>Tipo</strong></label>
    <select class="form-control" name="tipo">
        <option value="Comida" <?php echo $fila['tipo'] == 'Comida' ? 'selected' : ''; ?>>Comida</option>
        <option value="Bebida" <?php echo $fila['tipo'] == 'Bebida' ? 'selected' : ''; ?>>Bebida</option>
    </select>
    <div class="mb-3">
        <label for="tipo_en" class="form-label"><strong>Tipo ingles</strong></label>
        <select class="form-control" name="tipo_en">
        <option value="Comida" <?php echo $fila['tipo_en'] == 'Food' ? 'selected' : ''; ?>>Food</option>
        <option value="Bebida" <?php echo $fila['tipo_en'] == 'Drink' ? 'selected' : ''; ?>>Drink</option>
    </select>

</div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Actualizar producto</button>
      </div>




      </form>
    </div>
<?php
            // Cerramos las llaves del while y el if que hemos dejado abiertos más arriba.
          }
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