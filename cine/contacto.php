<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Contacto </title> 
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
    
        <div class="formulario">
            <form id="contactosandraformu" method="post" action="enviado.php">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="mensaje">Mensaje:</label>
                <input class="mensajeformu"type="text" id="mensaje" name="mensaje" required>
                <br>  
                <button type="submit">Enviar mesaje</button>
            </form>
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






