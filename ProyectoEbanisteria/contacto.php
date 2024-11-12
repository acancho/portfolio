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
        <div class="col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 text-center">
                        <h1 class="display-4">Contacto</h1>
                        <h2 class="h5 mb-4">Ponte en contacto con nosotros</h2>
                        <p class="lead">En Ebanistería Ramírez nos enorgullece ofrecer nuestros servicios de diseño y fabricación de muebles de madera a medida en toda la región de Madrid. Nuestro equipo de expertos artesanos está comprometido con la excelencia en cada proyecto, desde elegantes mesas hasta intricados armarios. ¡Contáctanos hoy para transformar tus ideas en realidad y embellecer tu hogar en Madrid!</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-10 offset-md-1 d-flex justify-content-center">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.6761832681827!2d-3.7637600000000004!3d40.3938689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418814cd23a0c9%3A0xc3803d7315e6b05b!2sEbanisteria%20Ramirez!5e0!3m2!1ses!2ses!4v1708188724741!5m2!1ses!2ses" class="embed-responsive-item" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  width="400" height="200"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h2 class="text-center mb-4">Contáctanos</h2>
                        <form action="enviado.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-outline-info">Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
