<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Confirmacion de nuevo usuario</title> 
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
      <div class="row "> 
        <div class="col-3"></div>       
        <div class="col-3 d-flex align-items-center justify-content-center  fs-3">
          <?php
            // Con la función session_start() indicamos que vamos a iniciar una sesión o reanudar una ya existente.
            session_start();
            // Comprobamos si ya existe una variable de sesión. En caso de no existir redirigimos a la página de login.php.
            if (!isset($_SESSION["usuario"])) {
                echo "<script>window.location.href = 'login.php';</script>";
            }

            include "includes/conexion.php";

            $usuario = $_POST["nombre"];
            $password = $_POST["contrasena"];

            // Obtener el valor máximo actual de id_horario y sumarle 1 para obtener un nuevo valor único
            $sql_max_id = "SELECT MAX(id) AS max_id FROM usuarios";
            $result_max_id = $mysqli->query($sql_max_id);
            $max_id = $result_max_id->fetch_assoc()['max_id'];
            $new_id = $max_id + 1;

            $encriptada = password_hash($password, PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$encriptada')";

            if ($mysqli->query($sql) === TRUE) {
                $mensaje = "YA ERES PARTE DE LA FAMILIA :)" ;
            } else {
                $mensaje = "Error al agregar usuario: " . $mysqli->error;
            }

            echo "<p>$mensaje</p>";

            $usuarios = $mysqli->query("SELECT * FROM usuarios");
            while ($row = $usuarios->fetch_assoc()) {
                // Aquí puedes hacer algo con los datos de los usuarios si lo necesitas.
            }
          ?>
        
          
        </div>
        <div class="col-6"><img src="img/familia.png" alt="" class="img-fluid"></div>
      </div>      
        <div class="col-12 d-flex align-items-center justify-content-center"><a href="index.php" class="btn btn-danger mb-5 mt-5">IR AL INICIO</a></div>      
    </div>
    <!-- TERMINA CONTENIDO -->

    <!-- EMPIEZA FOOTER -->
    <?php include "includes/footer.php"; ?>
    <!-- TERMINA FOOTER -->

    <script src="js/bootstrap.bundle.js"></script>
    <!-- <script src="js/javascript.js"></script> -->
  </body>
</html>






