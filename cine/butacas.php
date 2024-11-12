<?php
// Inicia la sesión solo si no está iniciada

// Obtener el ID de la película desde la URL
$id_pelicula = isset($_GET['id_pelicula']) ? $_GET['id_pelicula'] : '';

// URL de la API para obtener detalles de la película
$url_api_pelicula = 'https://api.themoviedb.org/3/movie/' . $id_pelicula . '?api_key=4b8385530cd0d39b1cc2b6634901d305';

$peticion_pelicula = curl_init();
curl_setopt($peticion_pelicula, CURLOPT_URL, $url_api_pelicula);
curl_setopt($peticion_pelicula, CURLOPT_RETURNTRANSFER, true);

$respuesta_pelicula = curl_exec($peticion_pelicula);
curl_close($peticion_pelicula);

if (curl_errno($peticion_pelicula)) {
  echo 'Error en Curl: ' . curl_error($peticion_pelicula);
} else {
  $respuesta_decodificada_pelicula = json_decode($respuesta_pelicula, true);
  if (!isset($respuesta_decodificada_pelicula['id'])) {
    echo 'Error al obtener los detalles de la película desde la API.';
  }
}
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FilmFun | Butacas</title>
  <link rel="shortcut icon" href="img/favicon.png" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!-- EMPIEZA MENU -->

  <?php

  // Inicia la sesión solo si no está iniciada
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  if (!isset($_SESSION["usuario"])) {
    // La sesión no está iniciada, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit(); // Asegura que el script se detenga después de la redirección
  }

  // La sesión está iniciada, incluir el menú correspondiente
  if (isset($_SESSION["usuario"])) {
    include "includes/menu2.php";
  } else {
    include "includes/menu.php";
  }

  ?>
  <br><br><br><br>
  <!-- TERMINA MENU -->

  <!-- EMPIEZA CONTENIDO -->
  <div class="container fondonegro contenido">

    <div class="row">


      <?php

      include "includes/conexion.php";

      ?>

      <div class="container-fludid">


        <ul class="showcase">
          <li>
            <div class="seat"></div>
            <small>Disponibles</small>
          </li>
          <li>
            <div class="seat selected"></div>
            <small>Seleccionados</small>
          </li>
          <li>
            <div class="seat occupied"></div>
            <small>Ocupados</small>
          </li>
        </ul>

        <div class="container">
          <div class="row d-flex justify-content-center align-items-center">
            <div class="screen"></div>
          </div>

          <div class="row d-flex justify-content-center align-items-center">
            <div class="seat occupied" data-seat="A1" name="seat[]" onclick="selectSeat('A1')"></div>
            <div class="seat occupied" data-seat="A2" name="seat[]" onclick="selectSeat('A2')"></div>
            <div class="seat occupied" data-seat="A3" name="seat[]" onclick="selectSeat('A3')"></div>
            <div class="seat" data-seat="A4" name="seat[]" onclick="selectSeat('A4')"></div>
            <div class="seat" data-seat="A5" name="seat[]" onclick="selectSeat('A5')"></div>
            <div class="seat" data-seat="A6" name="seat[]" onclick="selectSeat('A6')"></div>
            <div class="seat" data-seat="A7" name="seat[]" onclick="selectSeat('A7')"></div>
            <div class="seat" data-seat="A8" name="seat[]" onclick="selectSeat('A8')"></div>
            <div class="seat" data-seat="A9" name="seat[]" onclick="selectSeat('A9')"></div>
            <div class="seat" data-seat="A10" name="seat[]" onclick="selectSeat('A10')"></div>
            <div class="seat" data-seat="A11" name="seat[]" onclick="selectSeat('A11')"></div>
            <div class="seat" data-seat="A12" name="seat[]" onclick="selectSeat('A12')"></div>






          </div>
          <div class="row d-flex justify-content-center align-items-center">
            <div class="seat" data-seat="B1" name="seat[]" onclick="selectSeat('B1')"></div>
            <div class="seat" data-seat="B2" name="seat[]" onclick="selectSeat('B2')"></div>
            <div class="seat" data-seat="B3" name="seat[]" onclick="selectSeat('B3')"></div>
            <div class="seat" data-seat="B4" name="seat[]" onclick="selectSeat('B4')"></div>
            <div class="seat" data-seat="B5" name="seat[]" onclick="selectSeat('B5')"></div>
            <div class="seat" data-seat="B6" name="seat[]" onclick="selectSeat('B6')"></div>
            <div class="seat" data-seat="B7" name="seat[]" onclick="selectSeat('B7')"></div>
            <div class="seat occupied" data-seat="B8" name="seat[]" onclick="selectSeat('B8')"></div>
            <div class="seat occupied" data-seat="B9" name="seat[]" onclick="selectSeat('B9')"></div>
            <div class="seat occupied" data-seat="B10" name="seat[]" onclick="selectSeat('B10')"></div>
            <div class="seat" data-seat="B11" name="seat[]" onclick="selectSeat('B11')"></div>
            <div class="seat" data-seat="B12" name="seat[]" onclick="selectSeat('B12')"></div>





          </div>
          <div class="row d-flex justify-content-center align-items-center">
            <div class="seat" data-seat="C1" name="seat[]" onclick="selectSeat('C1')"></div>
            <div class="seat" data-seat="C2" name="seat[]" onclick="selectSeat('C2')"></div>
            <div class="seat" data-seat="C3" name="seat[]" onclick="selectSeat('C3')"></div>
            <div class="seat" data-seat="C4" name="seat[]" onclick="selectSeat('C4')"></div>
            <div class="seat" data-seat="C5" name="seat[]" onclick="selectSeat('C5')"></div>
            <div class="seat" data-seat="C6" name="seat[]" onclick="selectSeat('C6')"></div>
            <div class="seat" data-seat="C7" name="seat[]" onclick="selectSeat('C7')"></div>
            <div class="seat occupied" data-seat="C8" name="seat[]" onclick="selectSeat('C8')"></div>
            <div class="seat occupied" data-seat="C9" name="seat[]" onclick="selectSeat('C9')"></div>
            <div class="seat" data-seat="C10" name="seat[]" onclick="selectSeat('C10')"></div>
            <div class="seat" data-seat="C11" name="seat[]" onclick="selectSeat('C11')"></div>
            <div class="seat" data-seat="C12" name="seat[]" onclick="selectSeat('C12')"></div>






          </div>
        </div>
        <div class="cinema-button-container">
          <p class="text">
            Has seleccionado <span id="count">0</span> asientos<br>
            Por el precio de <span id="total">0</span>€
          </p>
        

      <form method="post" action="">
        <input type="hidden" name="selectedSeats" id="selectedSeats" value="">
        <input type="hidden" name="totalPrice" id="totalPrice" value="0"> <!-- Campo oculto para el precio -->
        <button type="submit" onclick="procesarFormulario(event)" class="cinema-button">
          Añadir Asientos
        </button>
      </form>
    </div>
    <style>
      .cinema-button-container {
        text-align: center;
        margin: 20px;
      }

      .text {
        font-size: 16px;
        margin-bottom: 10px;
      }

      .cinema-button {
        background-color: #e84c3d;
        color: #ffffff;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
      }

      .cinema-button:hover {
        background-color: #962A20;
      }
    </style>
    <?php
    include "includes/conexion.php";

    // Procesar el formulario si se ha enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $selectedSeats = isset($_POST['selectedSeats']) ? $_POST['selectedSeats'] : '';
      $totalPrice = isset($_POST['totalPrice']) ? $_POST['totalPrice'] : 0;
    ?>
      <div class="cardWrap">


        <div class="card cardLeft">
          <?php
          include "includes/conexion.php";

          // Obtener el ID del cine o la película desde la URL
          $id = $_GET["id_cine"];
          $id_pelicula = $_GET["id_pelicula"];

          // Consulta para obtener información del cine
          $sql_cine = "SELECT * FROM cines WHERE id='$id'";
          $resultado_cine = mysqli_query($mysqli, $sql_cine);

          if (mysqli_num_rows($resultado_cine)) {
            while ($fila_cine = $resultado_cine->fetch_assoc()) {
              echo "<h1><span>" . $fila_cine['nombre'] . "</span></h1>";

              // Agrega más información del cine si es necesario
            }
          }
          if (isset($respuesta_decodificada_pelicula['id'])) {
            echo '<div class="title">';
            echo '<h2>' . $respuesta_decodificada_pelicula['title'] . '</h2>';
            echo '<span>Película</span>';
            echo '</div>';
            // Puedes mostrar más detalles de la película según sea necesario
          } else {
            echo "Pelicula no encontrada.";
          }
          // Agrega más información de la película si es necesario



          // Cierra la conexión a la base de datos
          mysqli_close($mysqli);
          ?>

          <div class="name">
            <h2 id="precioTicket"><?php echo $totalPrice  ?> €</h2>
            <span>Precio</span>
          </div>
          <div class="seatt">
            <h2 id="asientosTicket"><?php echo $selectedSeats ?></h2>
            <span>Asientos</span>
          </div>

        </div>
        <div class="card cardRight">
          <div class="eye"></div>
          <div class="number">
            <h3><?php echo  $numeroAleatorio = rand(246, 5000); ?></h3>
            <span>Codigo</span>
          </div>
          <div class="barcode"></div>
        </div>

      </div>


    <?php

    }
    ?>


  </div>


  <style>
    .cardWrap {
      width: 28em;
      margin: 3em auto;
      color: #fff;
      font-family: sans-serif;
    }

    .card {
      background: linear-gradient(to bottom, #e84c3d 0%, #e84c3d 26%, #ecedef 26%, #ecedef 100%);
      height: 11em;
      float: left;
      position: relative;
      padding: 1em;
      margin-top: 100px;
    }

    .cardLeft {
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
      width: 19em;
      height: 14em;
    }

    .cardRight {
      width: 8.5em;
      border-left: 0.18em dashed #fff;
      border-top-right-radius: 8px;
      border-bottom-right-radius: 8px;
      height: 14em;
    }

    .cardRight:before,
    .cardRight:after {
      content: "";
      position: absolute;
      display: block;
      width: 0.9em;
      height: sem;
      background: #fff;
      border-radius: 50%;
      left: -0.5em;
    }

    .cardRight:before {
      top: -0.4em;
    }

    .cardRight:after {
      bottom: -0.4em;
    }

    h1 {

      font-size: 1.2em;
      margin-top: 0;
    }

    h1 span {
      font-weight: normal;
    }


    .title,
    .name,
    .seatt,
    .time {
      text-transform: uppercase;
      font-weight: normal;
    }

    .title h2,
    .name h2,
    .seatt h2 {
      font-size: 0.9em;
      color: #343434;
      margin: 0;
    }

    .title span,
    .name span,
    .seatt span,
    .time span {
      font-size: 0.8em;
      color: #a2aeae;
    }

    .title {
      margin: 2em 0 0 0;
    }

    .name,
    .seatt {
      margin: 0.7em 0 0 0;
    }

    .seatt,
    .time {
      float: left;
    }

    .eye {
      position: relative;
      width: 2em;
      height: 1.5em;
      background: #fff;
      margin: 0 auto;
      border-radius: 1em/0.6em;
      z-index: 1;
    }

    .eye:before,
    .eye:after {
      content: "";
      display: block;
      position: absolute;
      border-radius: 50%;
    }

    .eye:before {
      width: 1em;
      height: 1em;
      background: #e84c3d;
      z-index: 2;
      left: 8px;
      top: 4px;
    }

    .eye:after {
      width: 0.5em;
      height: 0.5em;
      background: #fff;
      z-index: 3;
      left: 12px;
      top: 8px;
    }

    .number {
      text-align: center;
      text-transform: uppercase;
    }

    .number h3 {
      color: #e84c3d;
      margin: 0.9em 0 0 0;
      font-size: 2.5em;
    }

    .number span {
      display: block;
      color: #a2aeae;
    }

    .barcode {
      height: 2em;
      width: 0;
      margin: 1.2em 0 0 0.8em;
      box-shadow: 1px 0 0 1px #343434, 5px 0 0 1px #343434, 10px 0 0 1px #343434, 11px 0 0 1px #343434, 15px 0 0 1px #343434, 18px 0 0 1px #343434, 22px 0 0 1px #343434, 23px 0 0 1px #343434, 26px 0 0 1px #343434, 30px 0 0 1px #343434, 35px 0 0 1px #343434, 37px 0 0 1px #343434, 41px 0 0 1px #343434, 44px 0 0 1px #343434, 47px 0 0 1px #343434, 51px 0 0 1px #343434, 56px 0 0 1px #343434, 59px 0 0 1px #343434, 64px 0 0 1px #343434, 68px 0 0 1px #343434, 72px 0 0 1px #343434, 74px 0 0 1px #343434, 77px 0 0 1px #343434, 81px 0 0 1px #343434;
    }
  </style>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Lato&display=swap");

    * {
      box-sizing: border-box;
    }



    .movie-container {
      margin: 20px 0;
    }

    .movie-container select {
      background-color: #fff;
      border: 0;
      border-radius: 5px;
      font-size: 14px;
      margin-left: 10px;
      padding: 5px 15px 5px 15px;
      appearance: none;
      -moz-appearance: none;
      -webkit-appearance: none;
    }

    .container {
      perspective: 1000px;
      margin-bottom: 10px;
    }

    .seat {
      background-color: #444451;
      height: 12px;
      width: 15px;
      margin: 3px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .seat.selected {
      background-color: #6feaf6;
    }

    .seat.occupied {
      background-color: #fff;
      pointer-events: none;
    }

    .seat:nth-of-type(6) {
      margin-right: 18px;
    }

    .seat:nth-last-of-type(6) {
      margin-left: 18px;
    }


    .seat:not(.occupied):hover {
      cursor: pointer;
      transform: scale(1.2);
    }

    .showcase.seat:not(.occupied):hover {
      cursor: default;
      transform: scale(1);
    }

    .showcase {
      background-color: rgba(0, 0, 0, 0.1);
      padding: 5px 10px;
      border-radius: 5px;
      color: #777;
      list-style-type: none;
      display: flex;
      justify-content: space-between;
    }

    .showcase li {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 10px;
    }

    .showcase li small {
      margin-left: 2px;
    }

    .row {
      display: flex;
    }

    .screen {
      background-color: #fff;
      height: 70px;
      width: 430px;
      margin: 15px 0;
      transform: rotateX(-45deg);
      box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
    }

    p.text {
      margin: 8px 0;
    }

    p.text span {
      color: #6faef6;
    }
  </style>
  <script>
    function selectSeat(seat) {
      var selectedSeats = document.getElementById('selectedSeats');
      var seatElement = document.querySelector('.seat[data-seat="' + seat + '"]');

      if (seatElement.classList.contains('selected')) {
        seatElement.classList.remove('selected');
      } else {
        seatElement.classList.add('selected');
      }

      updateSelectedSeats();
    }

    function updateSelectedSeats() {
      var selectedSeats = document.querySelectorAll('.seat.selected');
      var selectedSeatsCount = selectedSeats.length - 1;

      var totalPrice = selectedSeatsCount * 10; // Suponiendo que cada asiento cuesta 10
      document.getElementById('count').innerText = selectedSeatsCount;
      document.getElementById('total').innerText = totalPrice;

      var selectedSeatsValue = Array.from(selectedSeats).map(seat => seat.dataset.seat).join(' ');
      document.getElementById('selectedSeats').value = selectedSeatsValue;
      document.getElementById('totalPrice').value = totalPrice; // Actualiza el campo oculto
    }

    function procesarFormulario(event) {
      event.preventDefault();

      var selectedSeatsValue = document.getElementById('selectedSeats').value;

      // Actualizar los asientos seleccionados en la misma página
      var resultContainer = document.createElement('div');
      resultContainer.innerHTML = "<p>Asientos seleccionados: " + selectedSeatsValue + "</p>";
      document.body.appendChild(resultContainer);

      // Aquí puedes realizar acciones adicionales antes de enviar el formulario, si es necesario.

      // Luego, puedes enviar el formulario utilizando JavaScript o dejar que se envíe normalmente.
      document.forms[0].submit(); // Esto enviará el primer formulario en la página.
    }
  </script>







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