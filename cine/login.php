<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Login </title> 
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

  <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center"><img class="my-5 img-fluid" src="img/registro.png" style="width:200px;"></div>
                <div class="col-3"></div>
                <div class="col-6">
                    <form method="POST" action="login2.php">
                        
                        <h1 class="h3 mb-3 fw-normal">Entrar en tu Cuenta</h1>        
                        <div>
                            <input type="text" class="form-control" id="Usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div>
                            <input type="password" class="form-control mt-3" id="Password" name="password" placeholder="Contraseña">
                        </div>
                        <button class="w-100 btn btn-lg btn-danger mt-4" type="submit">Entrar</button>
                    </form>
                </div>
                <div class="col-3"></div>
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






