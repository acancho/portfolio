<?php
    include 'includes/head.php';
    ?>
  <body >
    
    <!-- NAV -->
    <?php
    include 'includes/nav.php';
    ?>
    <!-- NAV -->
    <!-- contenido -->
    <div class="container text-center" data-bs-theme="dark">
    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
include 'includes/conexion.php';

$sql = "SELECT * FROM cachimbas";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col mb-4">
            <div class="card h-100">
                <img src="img/<?php echo $row['foto_cachimbas']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['nombre_cachimbas']; ?></h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $row['id_cachimbas']; ?>">
                        Ver detalles
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal_<?php echo $row['id_cachimbas']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $row['id_cachimbas']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel_<?php echo $row['id_cachimbas']; ?>"><?php echo $row['nombre_cachimbas']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="img/<?php echo $row['foto_cachimbas']; ?>" class="card-img-top" alt="...">
                        <p class="card-text"><?php echo $row['descripcion_cachimbas']; ?></p>
                        <p class="card-text">Precio: <?php echo $row['precio_cachimbas']; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar conexión
$mysqli->close();
?>
    </div>
</div>
<!-- contenido -->
<!-- Footer -->
<?php
    include 'includes/footer.php';
    ?>
<!-- Footer -->
<script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
  </body>
</html>
