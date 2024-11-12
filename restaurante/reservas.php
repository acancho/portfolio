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
        window.location.href = 'ingles/reservas.php';
      }
    });
  </script>
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

  <form action="reservasEnviar.php" class="form_contact" method="POST">
    <h2>Envia un mensaje</h2>
    <div class="user_info">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" required pattern="[0-9]{9}">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="fecha">Fecha reserva:</label>
      <input type="date" id="fecha" name="fecha">
      <label for="hora">Hora reserva:</label>
      <select id="hora" name="hora" required>
        <option value="">Selecciona una hora</option>
        <option value="13:00">13:00</option>
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
        <option value="14:30">14:30</option>
        <option value="15:00">15:00</option>
        <option value="20:30">20:30</option>
        <option value="21:00">21:00</option>
        <option value="21:30">21:30</option>
        <option value="22:00">22:00</option>
        <option value="22:30">22:30</option>
      </select><br>
      <button class="custom-btn btn-14">Enviar</button>
    </div>
  </form>
</section>
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






  </div>
  <!-- *********************************************************************************************************************************************** -->

  <?php
  include "footer.php";
?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>