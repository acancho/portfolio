<?php
include 'includes/head.php';
?>
<body>
    
    <!-- NAV -->
    <?php
    include 'includes/nav.php';
    ?>
    <!-- NAV -->

    <!-- Contenido -->
    <div class="container text-center" data-bs-theme="dark">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            include 'includes/conexion.php';

            $sql = "SELECT * FROM comida";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-sm-6 mb-4"> <!-- En dispositivos pequeños, se mostrarán dos columnas -->
                        <div class="card h-100">
                            <img src="img/<?php echo $row['foto_comida']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nombre_comida']; ?></h5>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $row['id_comida']; ?>">
                                    Ver detalles
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_<?php echo $row['id_comida']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel_<?php echo $row['id_comida']; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel_<?php echo $row['id_comida']; ?>"><?php echo $row['nombre_comida']; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/<?php echo $row['foto_comida']; ?>" class="card-img-top" alt="<?php echo $row['descripcion_comida']; ?>">
                                    <p class="card-text"><?php echo $row['descripcion_comida']; ?></p>
                                    <p class="card-text">Precio: €<?php echo $row['precio_comida']; ?></p>
                                    <form class="add-to-cart-form" data-id="<?php echo $row['id_comida']; ?>" data-type="comida">
                                        <div class="mb-3">
                                            <label for="quantity_<?php echo $row['id_comida']; ?>" class="form-label">Cantidad</label>
                                            <input type="number" class="form-control" id="quantity_<?php echo $row['id_comida']; ?>" name="quantity" value="1" min="1" max="<?php echo $row['cantidad_comida']; ?>">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                                    </form>
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
    <!-- Contenido -->

    <!-- Footer -->
    <?php
    include 'includes/footer.php';
    ?>
    <!-- Footer -->

    <script src="bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.add-to-cart-form').submit(function(event) {
                event.preventDefault();
                var form = $(this);
                var id = form.data('id');
                var type = form.data('type');
                var quantity = form.find('input[name="quantity"]').val();

                $.ajax({
                    url: 'update_cart.php',
                    type: 'POST',
                    data: {
                        action: 'add',
                        id: id,
                        type: type,
                        quantity: quantity
                    },
                    success: function(response) {
                        alert('Producto añadido al carrito');
                        // Opcional: Actualizar el contenido del carrito en la página
                        $('#cart-count').text(response.cart_count);
                    }
                });
            });
        });
    </script>
</body>
</html>
