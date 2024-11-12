<?php
include 'includes/head.php';
?>
<body>
    
    <!-- NAV -->
    <?php
    include 'includes/nav.php';
    ?>
    <!-- NAV -->
    <!-- contenido -->
    <div class="container text-center" data-bs-theme="dark">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php
            include 'includes/conexion.php';

            // Obtener la consulta de búsqueda
            $busqueda = isset($_GET['q']) ? $_GET['q'] : '';

            // Verificar que la consulta de búsqueda no esté vacía
            if (!empty($busqueda)) {
                // Consulta SQL para buscar en todas las tablas
                $sql = "SELECT * FROM 
        (SELECT id_comida AS id, nombre_comida AS nombre, descripcion_comida AS descripcion, precio_comida AS precio, NULL AS foto, NULL AS tipo FROM comida 
        UNION 
        SELECT id_bebidas AS id, nombre_bebidas AS nombre, descripcion_bebidas AS descripcion, precio_bebidas AS precio, NULL AS foto, NULL AS tipo FROM bebidas
        UNION 
        SELECT id_cachimbas AS id, nombre_cachimbas AS nombre, descripcion_cachimbas AS descripcion, precio_cachimbas AS precio, NULL AS foto, NULL AS tipo FROM cachimbas
        UNION 
        SELECT id_tabacos AS id, nombre_tabacos AS nombre, descripcion_tabacos AS descripcion, precio_tabacos AS precio, NULL AS foto, tipo_tabacos AS tipo FROM tabacos
        UNION 
        SELECT id_tabacos AS id, NULL AS nombre, marca_tabacos AS descripcion, precio_tabacos AS precio, NULL AS foto, tipo_tabacos AS tipo FROM tabacos) AS all_products 
        WHERE nombre LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' OR tipo LIKE '%$busqueda%'";



                $result = $mysqli->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <?php if ($row['foto']): ?>
                                    <img src="img/<?php echo $row['foto']; ?>" class="card-img-top" alt="...">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
                                    <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                    <p class="card-text">Precio: <?php echo $row['precio']; ?></p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $row['id']; ?>">
                                        Ver detalles
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $row['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel_<?php echo $row['id']; ?>"><?php echo $row['nombre']; ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php if ($row['foto']): ?>
                                            <img src="img/<?php echo $row['foto']; ?>" class="card-img-top" alt="...">
                                        <?php endif; ?>
                                        <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                        <p class="card-text">Precio: <?php echo $row['precio']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Agregar al carrito</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p>No se encontraron resultados para la búsqueda.</p>";
                }
            } else {
                echo "<p>No se proporcionó una consulta de búsqueda.</p>";
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
