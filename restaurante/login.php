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
        window.location.href = 'ingles/login.php';
      }
    });
  </script>
  <br />
  <center>
    <div class="login-container">
      <section class="login" id="login">
        <header>
          <h2>Acceder como administrador</h2>
        </header>
        <form class="login-form" action="crud.php" method="post" onsubmit="return validarFormulario()">
          <input type="text" class="login-input" placeholder="Usuario" id="usuario" required />
          <input type="password" class="login-input" placeholder="Contraseña" id="contrasena" required />
          <div class="submit-container">
            <button type="submit" class="login-button">Acceder</button>
          </div>
        </form>
      </section>
    </div>

    <script>
      function validarFormulario() {
        var usuario = document.getElementById('usuario').value;
        var contrasena = document.getElementById('contrasena').value;

        if (usuario == 'admin' && contrasena == 'admin') {
          return true;
        } else {
          alert('Usuario o contraseña incorrectos');
          return false;
        }
      }
    </script>
  </center>
  <br /><br /><br />
  </div>

  <!-- *********************************************************************************************************************************************** -->

  <!-- Remove the container if you want to extend the Footer to full width. -->
  <?php
  include "footer.php";
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>