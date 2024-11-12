<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FilmFun | Correo enviado</title> 
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
  <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';


$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail = new PHPMailer();

    
    $mail->isSMTP();
    $mail->Host       = 'segundodaw.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alumno@segundodaw.com';
    $mail->Password   = 'SegundoDAW';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recibir los datos del formulario
    $nombre = $_POST["nombre"];
    $nombre = utf8_decode($nombre);
    $remitente = $_POST["email"];
    $destinatario = "scayuelaparragues@gmail.com";
    $asunto = "Contacto Portfolio";
    $mensaje =$_POST["mensaje"];

    // Destinatario y remitente
    $mail->setFrom('alumno@segundodaw.com', 'Contacto Portfolio');
    $mail->addAddress($destinatario);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = "Nombre: $nombre
    <br>Email: $remitente<br>
    Mensaje: $mensaje";

    // Enviar el correo
    $mail->send();

    // echo '¡mensaje enviado!';
} catch (Exception $e) {
    echo "Error al enviar la reserva: {$mail->ErrorInfo}";
}

?>
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






