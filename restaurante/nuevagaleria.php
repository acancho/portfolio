<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Carta Cancho_hookah</title>
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
        window.location.href = 'ingles/nuevagaleria.php';
      }
    });
  </script>
  <br>
  <div class="container text-center">

    <h1 class="text-center">Nueva foto</h1>
    <div class="row">
      <div class="col-12">
        <form action="nuevo_foto.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="id"></label>
            <input type="hidden" id="id" name="id" value="">
            
          </div>
         
          <div class="mb-3">
            <label for="imagen" class="form-label"><strong>Imagen:</strong></label>
            <input type="file" name="archivo" required>
          </div>
          
          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Añadir foto</button>
          </div>
        </form>
      </div>
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