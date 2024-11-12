<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Somos una ebanistería especializada en la creación de muebles de madera a medida, desde elegantes mesas hasta intricados armarios. ¡Descubre la belleza de nuestros diseños artesanales!">
	<meta name="keywords" content="ebanistería, muebles de madera, diseño de muebles, carpintería, muebles a medida">
	<meta name="Adrian Cancho" content="Ebanisteria Ramirez y Adrian Cancho">
	<meta property="og:title" content="Descubre los Exquisitos Muebles de Madera Hechos a Mano en nuestra Ebanistería">
	<meta property="og:description" content="Explora nuestra colección de muebles únicos hechos a mano con madera de la más alta calidad. ¡Encuentra el complemento perfecto para tu hogar!">
	<meta name="robots" content="index, follow">


  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.png" />
  <title>
        <?php
$url_actual = $_SERVER['REQUEST_URI'];

// Encuentra la posición de la primera barra
$primer_barra = strpos($url_actual, '/') + 1;

// Encuentra la posición de la segunda barra
$segunda_barra = strpos($url_actual, '/', $primer_barra + 1);

// Si se encontró una segunda barra
if ($segunda_barra !== false) {
    // Extrae la parte de la URL después de la segunda barra
    $parte_desde_segunda_barra = substr($url_actual, $segunda_barra + 1);
    
    // Encuentra la posición del último punto
    $ultimo_punto = strrpos($parte_desde_segunda_barra, '.');

    // Si se encontró un punto
    if ($ultimo_punto !== false) {
        // Extrae la parte de la URL desde el último punto hacia atrás
        $parte_deseada = substr($parte_desde_segunda_barra, 0, $ultimo_punto);
        $parte_deseada = ucfirst($parte_deseada);
        echo $parte_deseada . " | Ebanistería Ramirez";
    } else {
        // Si no se encontró un punto, muestra un mensaje indicando que no se pudo encontrar
        echo "No se encontró un punto en la parte de la URL después de la segunda barra.";
    }
} else {
    // Si no se encontró una segunda barra, muestra un mensaje indicando que no se pudo encontrar
    echo "No se encontró la segunda barra en la URL.";
}
?>
    </title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!-- NAV -->
            <?php include 'includes/nav.php'; ?>
            <!-- FIN DE NAV -->
        </div>
    </div>
</div>

<div class="container">
    <!-- FOTO principal -->
    <div class="row">
<h1 class="text-center">Reseñas</h1>
<!-- reseñas -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    include 'includes/conexion.php'; // Incluir archivo de conexión

    // Consulta a la base de datos
    $sql = "SELECT * FROM resenas";
    $result = mysqli_query($mysqli, $sql);

    $active = true; // Variable para controlar la primera imagen como activa
    
    if (mysqli_num_rows($result) > 0) {
        // Imprimir datos en el carousel
        while($row = mysqli_fetch_assoc($result)) {
          $numero_carpinteria = rand(1, 10);
    $ruta_imagen = "img/carpinteria" . $numero_carpinteria . ".jpg";
            // Establecer la clase 'active' solo para la primera imagen
            $activeClass = $active ? 'active' : '';
            echo '<div class="carousel-item ' . $activeClass . '">';
            echo '<img src="' . $ruta_imagen . '" class="d-block w-100" alt="...">';
            echo '<div class="carousel-caption d-none d-md-block">';
            // Imprimir datos de la base de datos
            echo '<h4>' . $row['nombre'] . '</h4>';
            echo '<h5>' . $row['descripcion'] . '</h5>';
            echo '<h3>' . $row['puntuacion'] . '</h3>';
            echo '</div>';
            echo '</div>';

            $active = false; // Desactivar la variable para las siguientes imágenes
        }
    } else {
        echo "0 resultados";
    }
    // Cerrar conexión (si es necesario)
    mysqli_close($mysqli);
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<div class="containerr" id="gradient">
    <h1 class="text-center mb-4">Pon tu reseña</h1>
    <form action="agregar_resena.php" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="puntuacion" class="form-label">Puntuación</label>
            <input type="number" class="form-control" id="puntuacion" name="puntuacion" min="1" max="5" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-info">Agregar Reseña</button>
        </div>
    </form>
</div>
<style>
.containerr {
            max-width: 500px;
            margin: 50px auto;
            border-radius: 30px;
            padding: 20px;
            
          
            
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
        }
    </style>
<script>
  var colors = new Array(
    [139, 69, 19, 0.5],   
    [160, 82, 45, 0.5],   
    [210, 105, 30, 0.5],   
    [139, 69, 19, 0.5],   
    [160, 82, 45, 0.5],    
    [205, 133, 63, 0.5]    
  );

 

  var step = 0;

  var colorIndices = [0, 1, 2, 3];


  var gradientSpeed = 0.002;

  function updateGradient() {
    if ( $ === undefined ) return;
    var c0_0 = colors[colorIndices[0]];
    var c0_1 = colors[colorIndices[1]];
    var c1_0 = colors[colorIndices[2]];
    var c1_1 = colors[colorIndices[3]];

    var istep = 1 - step;
    var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
    var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
    var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
    var color1 = "rgba(" + r1 + "," + g1 + "," + b1 + "," + c0_0[3] + ")";

    var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
    var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
    var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
    var color2 = "rgba(" + r2 + "," + g2 + "," + b2 + "," + c1_0[3] + ")";

    $('#gradient').css({
      background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
    }).css({
      background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
    });

    step += gradientSpeed;
    if (step >= 1) {
      step %= 1;
      colorIndices[0] = colorIndices[1];
      colorIndices[2] = colorIndices[3];

      colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
      colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

    }
  }

  setInterval(updateGradient, 10);
</script>





</div>
</div>

<div class="container-fluid">
    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>
    <!-- FIN DE FOOTER -->
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
