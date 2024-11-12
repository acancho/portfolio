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
        <div class="row">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb text-dark">
        <li class="breadcrumb-item active"><a  href="Trabajos.php" class="text-dark link-offset-2 link-underline link-underline-opacity-0">Trabajos</a></li>
    </ol>
</nav>
<hr>
            <div class="col-md-6 offset-md-3 mb-4">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar..." name="q" value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
                        <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
        <h1 class="text-center">Trabajos</h1>
        <br>

        <!-- FOTO principal -->
        <div class="row">
            <?php
            include 'includes/conexion.php';

            // Obtener el término de búsqueda
            $term = isset($_GET['q']) ? $_GET['q'] : '';

            // Paginación
            $resultados_por_pagina = 8;
            $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $empezar_desde = ($pagina - 1) * $resultados_por_pagina;

            // Consulta SQL con filtrado por término de búsqueda
            $sql = "SELECT * FROM trabajos WHERE nombre LIKE '%$term%' OR descripcion LIKE '%$term%' OR tipo LIKE '%$term%' LIMIT $empezar_desde, $resultados_por_pagina";
            $resultado = mysqli_query($mysqli, $sql);

            if (mysqli_num_rows($resultado)) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<div class='col-md-3 mb-4'>";
                    echo "  <div class='card'>";
                    echo "    <img src='img/" . $fila["imagen"] . "' alt='Foto' class='card-img' style='width: 100%; height: auto;'>";
                    echo "    <div class='card-body'>";
                    echo "      <h5 class='card-title'>" . $fila['nombre'] . "</h5>";
                    echo "      <p class='card-text'>" . $fila['descripcion'] . "</p>";
                    echo "      <p class='card-text'>" . $fila["tipo"] . "</p>";
                    echo "    </div>";
                    echo "    <div class='card-footer'>";
                    echo "      <a href='detalles_trabajo.php?id=" . $fila["id"] . "' class=' btn btn-outline-info'>Ver detalles</a>";
                    echo "    </div>";
                    echo "  </div>";
                    echo "</div>";
                }
            } else {
                echo "Sin resultados";
            }
            ?>
        </div>
        <!-- FIN FOTO principal -->

        <!-- Paginación -->
        <div class="row">
            <div class="col-12">
                <?php
                $sql_total = "SELECT * FROM trabajos WHERE nombre LIKE '%$term%' OR descripcion LIKE '%$term%' OR tipo LIKE '%$term%'";
                $resultado_total = mysqli_query($mysqli, $sql_total);
                $total_registros = mysqli_num_rows($resultado_total);
                $total_paginas = ceil($total_registros / $resultados_por_pagina);

                echo "<ul class='pagination justify-content-center'>";
                for ($i = 1; $i <= $total_paginas; $i++) {
                    echo "<li class='page-item'><a class='page-link btn btn-outline-primary' href='?q=$term&pagina=" . $i . "'>" . $i . "</a></li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>
        <!-- FIN de Paginación -->
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