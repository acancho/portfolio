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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">



</head>

<body>
<?php
  include "nav.php";
  ?>
  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/nueva.php';
      }
    });
  </script>
  <br>
  <div class="container text-center">

    <h1 class="text-center">Nuevo Producto</h1>
    <div class="row">
      <div class="col-12">
        <form action="nuevo_producto.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="id"></label>
            <input type="hidden" id="id" name="id" value="">
            <label for="titulo" class="form-label" ><strong>Título:</strong></label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
          </div>
          <div class="mb-3">
            <label for="titulo" class="form-label" ><strong>Título Ingles:</strong></label>
            <input type="text" class="form-control" id="titulo" name="titulo_en" required>
          </div>
          <div class="mb-3">
            <label for="descripcion" class="form-label"><strong>Descripcion:</strong></label>
            <input type="text" class="form-control" name="descripcion" required>
          </div>
          <div class="mb-3">
            <label for="descripcion" class="form-label"><strong>Descripcion Ingles:</strong></label>
            <input type="text" class="form-control" name="descripcion_en" required>
          </div>
          <div class="mb-3">
            <label for="precio" class="form-label"><strong>Precio:</strong></label>
            <input type="num" class="form-control" id="precio" name="precio" required>
          </div>
          <div class="mb-3">
            <label for="imagen" class="form-label"><strong>Imagen:</strong></label>
            <input type="file" name="archivo" required>
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label"><strong>Tipo:</strong></label>
            <select class="form-control" name="tipo" required>
              <option value="Comida">Comida</option>
              <option value="Bebida">Bebida</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label"><strong>Tipo Ingles:</strong></label>
            <select class="form-control" name="tipo_en" required>
              <option value="Food">Food</option>
              <option value="Drink">Drink</option>
            </select>
          </div>
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Añadir producto</button>
          </div>
        </form>
      </div>
    </div>
    <style>
  body {
    font-family: 'Roboto', sans-serif;
  }

  .container {
    font-family: 'Roboto', sans-serif;
    /* Agrega otros estilos según sea necesario */
  }

  h1, h2, h3, h4, h5, h6 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
  }

  .form-label {
    font-weight: 700;
  }

  .form-control {
    font-family: 'Roboto', sans-serif;
  }

  .btn {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
  }
</style>
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