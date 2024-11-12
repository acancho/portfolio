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
                <br><br>
                <div class="d-grid gap-2 col-6 mx-auto">

                    <a href="index.php" class="btn btn-warning">Volver a la página principal</a>
                </div>

            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <h1 class="text-center">Gestor de pagina web</h1>

        <h2>Trabajos</h2>
        <a class='nav-linkk' href='nueva.php'>
            <div class='nueva btn btn-success'>
                Nuevo trabajo
            </div>
        </a>
        <div class="container mt-5">
    <!-- Formulario de búsqueda de trabajos -->
    <form class="form-inline mb-3" method="GET" action="">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar trabajos" aria-label="Buscar trabajos" name="r">
        <br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <?php
    include 'includes/conexion.php'; // Incluir archivo de conexión

    // Variables para la paginación
    $registros_por_pagina = 6;
    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    $offset = ($pagina_actual - 1) * $registros_por_pagina;

    // Manejo de la búsqueda de trabajos
    $search_query = "";
    if (isset($_GET['r'])) {
        $search_query = $_GET['r'];
        $sql = "SELECT * FROM trabajos WHERE 
        nombre LIKE '%$search_query%' OR 
        descripcion LIKE '%$search_query%' OR 
        material LIKE '%$search_query%' OR 
        tipo LIKE '%$search_query%' OR 
        localizacion LIKE '%$search_query%'
        LIMIT $offset, $registros_por_pagina";
    } else {
        $sql = "SELECT * FROM trabajos LIMIT $offset, $registros_por_pagina";
    }

    $result = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($result) > 0) {
        if (!empty($search_query)) {
            echo '<p class="btn btn-outline-light"><a href="?">Borrar filtro de búsqueda X</a></p>';
        }
        
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="img/' . $row["imagen"] . '" class="card-img-top img-fluid" alt="' . $row["nombre"] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title text-center">' . $row["nombre"] . '</h5>';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item"><strong>Material:</strong> ' . $row["material"] . '</li>';
            echo '<li class="list-group-item"><strong>Tipo:</strong> ' . $row["tipo"] . '</li>';
            echo '<li class="list-group-item"><strong>Localización:</strong> ' . $row["localizacion"] . '</li>';
            echo '<li class="list-group-item"><strong>Descripcion:</strong><br> ' . $row["descripcion"] . '</li>';
            echo '</ul>';

            echo '<div class="text-center mt-3 d-flex justify-content-around">';
            echo "<a href='editartrabajo.php?id=" . $row['id'] . "' class='btn btn-primary mr-2'>Editar</a>";
            echo "<a href='eliminartrabajo.php?id=" . $row['id'] . "' class='btn btn-danger'>Eliminar</a>";
            echo '</div>'; // Cierre del contenedor para centrar los botones y agregar margen superior
            echo '</div>'; // Cierre del card-body
            echo '</div>'; // Cierre del card
            echo '</div>'; // Cierre de la columna
        }
        echo '</div>'; // Cierre de la fila

        // Cálculo de la paginación
        $sql_total = "SELECT COUNT(*) as total FROM trabajos";
        $result_total = mysqli_query($mysqli, $sql_total);
        $row_total = mysqli_fetch_assoc($result_total);
        $total_registros = $row_total['total'];
        $total_paginas = ceil($total_registros / $registros_por_pagina);

        echo '<nav aria-label="Page navigation d-flex justify-content-center">';
        echo '<ul class="pagination">';
        for ($i = 1; $i <= $total_paginas; $i++) {
            echo '<li class="page-item"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
        }
        echo '</ul>';
        echo '</nav>';
    } else {
        echo "<p class='container mt-5'>No hay trabajos disponibles</p>";
    }

    // Enlace para borrar el filtro de búsqueda
    
    ?>


        </div>
        <div class="row">
        <div class="container mt-5">
    <h2>Reseñas</h2>

    <!-- Formulario de búsqueda de reseñas -->
    <form class="form-inline mb-3" method="GET" action="">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar reseñas" aria-label="Buscar reseñas" name="q">
        <br>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <?php
    include 'includes/conexion.php'; // Incluir archivo de conexión

    // Enlace para borrar el filtro de búsqueda
    
    // Manejo de la búsqueda de reseñas
    $search_query = "";
    if (isset($_GET['q'])) {
        $search_query = $_GET['q'];
        $sql = "SELECT * FROM resenas WHERE nombre LIKE '%$search_query%' OR descripcion LIKE '%$search_query%'";
    } else {
        $sql = "SELECT * FROM resenas";
    }

    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) {
        if (!empty($_GET['q'])) {
            echo '<p><a href="?">Borrar filtro de búsqueda</a></p>';
        }
    
        echo '<div class="table-responsive">';
        echo '<table class="table table-striped">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Nombre</th>';
        echo '<th>Descripción</th>';
        echo '<th>Puntuación</th>';
        echo '<th>Acciones</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row["nombre"] . '</td>';
            echo '<td>' . $row["descripcion"] . '</td>';
            echo '<td>' . $row["puntuacion"] . '</td>';
            echo '<td>';
            echo "<a href='eliminar.php?id=" . $row['id'] . "' class='btn btn-danger'>Eliminar</a>";
            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo "<p>No hay reseñas disponibles</p>";
    }
    ?>
</div>

        </div>
    </div>
    <br><br>

    <div class="container-fluid">
        <div class="fixed-bottom m-3">
            <a href="#top" class="btn btn-primary btn-lg">↑ Ir arriba</a>
        </div>
        <!-- FOOTER -->

        <!-- FIN DE FOOTER -->
    </div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
<script src="js/bootstrap.bundle.js"></script>
</body>

</html>