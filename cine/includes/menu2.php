
<div class="container-fluid fondonegro">
      <div class="container d-flex justify-content-center">
        <a href="index.php"><img src="img/logoN.png" alt="logo cine" class="imagenlogo"></a>     
      </div>
    </div>

    <div class="container-fluid fondonegro">
      <div class="container fondonegro">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav mx-auto">                    
                    <li class="nav-item dropdown ms-5 me-5">
                      <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CINES</a>
                      <ul class="dropdown-menu fondonegro">

                      <li><a class="dropdown-item" href="cines.php">TODOS</a></li>
                        <li><a class="dropdown-item" href="cinesmadrid.php">MADRID</a></li>
                        <li><a class="dropdown-item" href="cinesbarcelona.php">BARCELONA</a></li>
                        <li><a class="dropdown-item" href="cinesvalencia.php">VALENCIA</a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown ms-5 me-5">
                      <a class="nav-link dropdown-toggle text-light fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CARTA</a>
                      <ul class="dropdown-menu fondonegro">
                        <li><a class="dropdown-item" href="comida.php">COMIDA</a></li>
                        <li><a class="dropdown-item" href="bebidas.php">BEBIDAS</a></li>
                        <li><a class="dropdown-item" href="menus.php">MENÚS</a></li>
                      </ul>
                    </li>
                    <li class="nav-item ms-5 me-5">
                      <a class="nav-link text-light fs-5" href="peliculas2.php">PELICULAS</a>
                    </li>                   
                    <li class="nav-item ms-5 me-5">
                      <a class="nav-link text-light fs-5" href="contacto.php">CONTACTO</a>
                    </li>
                    <li class="nav-item ms-5 me-5">
                      <a class="nav-link text-light fs-5" href="cerrar_sesion.php">
                      <?php
include "includes/conexion.php";

    $usuarioActual = $_SESSION["usuario"];

    // Convertir el nombre de usuario a mayúsculas
    $usuarioActualMayusculas = strtoupper($usuarioActual);

    // Consultar la información del usuario actual
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuarioActualMayusculas'";
    $resultado = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($resultado)) {
        

        while ($fila = $resultado->fetch_assoc()) {
            // Mostrar el nombre del usuario actual en mayúsculas
            echo strtoupper($fila['usuario']);
            // Puedes agregar más detalles según la estructura de tu tabla de usuarios
        }

      
    }

?>












                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>