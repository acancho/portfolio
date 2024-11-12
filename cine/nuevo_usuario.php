<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Nuevo usuario</title> 
    <link rel="shortcut icon" href="img/favicon.png" />   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
 
  <body>
<!-- EMPIEZA MENU -->   

<?php
session_start();

if (isset($_SESSION["usuario"])) {
    // La sesión está iniciada, mostrar menu2.php
    include "includes/menu2.php";
} else {
    // La sesión no está iniciada, mostrar menu.php
    include "includes/menu.php";
}
?>
<!-- TERMINA MENU -->

<!-- EMPIEZA CONTENIDO -->
  <div class="container fondonegro contenido">
  <h2 class="text-center my-4">Regístrate</h2>

<form method="post" action="nuevo_usuario2.php" class="mx-auto" style="max-width: 300px;">
    <div class="form-group">
        <label for="nombre">Introduce tu nombre:</label>
        <input type="text" id="nombre" name="nombre" required class="form-control">
    </div>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
    <div class="form-group">
        <label for="contrasena">Introduce tu contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required class="form-control">
    </div>
<br>
    <input type="submit" name="agregar" value="Agregar usuario" class="btn btn-danger">
    <?php
    echo "<a href='registro.php' class='btn btn-secondary ml-2'>Volver</a>";
    ?>
</form>

  </div>
  <!-- CIERRA EL DIV GENERAL -->
 
<!-- TERMINA CONTENIDO   -->

<!-- EMPIEZA FOOTER -->

    <?php
        include "includes/footer.php";
    ?>
 </div>  
<!-- TERMINA FOOTER   -->

    <script src="js/bootstrap.bundle.js"></script>
    <!-- <script src="js/javascript.js"></script> -->
  </body>
</html>






