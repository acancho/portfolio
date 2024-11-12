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
  <script>
    document.getElementById('color_mode').addEventListener('change', function() {
      if (this.checked) {
        window.location.href = 'ingles/reservasEnviar.php';
      }
    });
  </script>
  <!-- *********************************************************************************************************************************************** -->
  <br>

  <section class="form_wrap">

    <section class="cantact_info">
      <section class="info_title">
        <span class="fa fa-user-circle"></span>
        <h2>INFORMACION<br>DE CONTACTO</h2>
      </section>
      <section class="info_items">
        <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
        <p><span class="fa fa-mobile"></span> +1(585) 902-8665</p>
      </section>
    </section>

    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $fechaReserva = strtotime($_POST["fecha"]);
      $fechaActual = time();
      $fechaMaxima = strtotime("+4 weeks", $fechaActual);

     if ($fechaReserva > $fechaMaxima || $fechaReserva < $fechaActual) {
                $mensajeError = 'Las reservas solo están disponibles para fechas en los próximos 4 semanas.';

                echo "<div style='
            margin: 1em auto;
            padding: 1em;
            background-color: #F2D7D5;
            color: #922B21 ;
            border-color: #641E16 ;
            border-radius: 5px;
            font-family: Arial, sans-serif;
            text-align: center;
        '>
            <h2>La Abuela</h2>
            <p>{$mensajeError}</p>
        </div>";
            } else {
        // Procesa la reserva...

        $nombre = $_POST["nombre"];
        $telefono = $_POST["telefono"];
        $victima = $_POST["email"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];

        $mensaje = "Nombre: $nombre<br>";
        $mensaje .= "Teléfono: $telefono<br>";
        $mensaje .= "Email: $victima<br>";
        $mensaje .= "Fecha de reserva: $fecha<br>";
        $mensaje .= "Hora de reserva: $hora<br>";

        $email = 'alumno@segundodaw.com';
        $password = 'SegundoDAW';
        $smtpServer = 'segundodaw.com';
        $port = 465;

        $mail = new PHPMailer(true);

        try {
          // Configurar el servidor SMTP
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;
          $mail->SMTPDebug = 0;
          $mail->isSMTP();
          $mail->Host       = $smtpServer;
          $mail->SMTPAuth   = true;
          $mail->Username   = $email;
          $mail->Password   = $password;
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
          $mail->Port       = $port;

          // Configurar el contenido del correo
          $mail->setFrom($email, 'La Abuela');
          $mail->addAddress($victima);
          $mail->isHTML(true);
          $mail->Subject = "Reserva";
          $mail->Body    = $mensaje;


          // Enviar el correo electrónico
          $mail->send();
          $mensaje = 'El correo electrónico ha sido enviado correctamente.';

          echo "<div style='
    margin: 1em auto;
    padding: 1em;
    background-color: #dff0d8;
    color: #3c763d;
    border-color: #d6e9c6;
    border-radius: 5px;
    font-family: Arial, sans-serif;
    text-align: center;
'>
    <h2>La Abuela</h2>
    <p>{$mensaje}</p>
</div>";
        } catch (Exception $e) {
          echo "Error al enviar el correo electrónico: {$mail->ErrorInfo}";
        }
      }
    } ?>
  </section>
  <div class="back-button">
    <a href="javascript:history.back()">Volver</a>
</div>

<style>
.back-button {
    text-align: center;
    margin: 20px;
}

.back-button a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    border-radius: 5px;
    color: #495057;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.back-button a:hover {
    background-color: #e9ecef;
}
</style>
<style>
  .form_wrap {
    display: flex;
    flex-wrap: wrap;
  }
  .cantact_info {
    flex: 1 0 200px;
    margin-right: 50px;
    
  }
  .form_contact {
    flex: 2 0 300px;
   
  }
  @media (max-width: 900px) {
    .form_wrap {
      flex-direction: column;
      height: 1200px;
      width: 600px;
    }
    .cantact_info {
      margin-right: 0;
      margin-bottom: 00px;
      width: 600px;
      
    }
    .user_info{
      width: 500px;
    }
    
  }
</style>
  <br><br><br>



  <!-- *********************************************************************************************************************************************** -->

  </div>
  <?php
  include "footer.php";
?>

































  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>