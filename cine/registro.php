<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Registro</title> 
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

  <div class="row d-flex align-items-center justify-content-center" >
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div>
          <a href="login.php" class="btn btn-danger mb-5 mt-5">Entra a tu cuenta</a>
          <a href="nuevo_usuario.php" class="btn btn-secondary mb-5 mt-5">Crear nuevo usuario</a>
      </div>
    </div>
  </div>

  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-12 d-flex align-items-center justify-content-center "><img src="img/sala.png" alt="" class="img-fluid"></div>
  </div>

  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-12 d-flex align-items-center justify-content-center "></div>
  </div>

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






