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

$sql = "SELECT * FROM tabacos";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    ?>
    <div class="table">
    <input class="form-control mb-3 white-placeholder" id="buscador" type="text" placeholder="Buscar...">


        <table class="table table-striped table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td class="d-none d-sm-table-cell"><?php echo $row['tipo_tabacos']; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $row['marca_tabacos']; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $row['nombre_tabacos']; ?></td>
                        <td class="d-none d-sm-table-cell"><?php echo $row['descripcion_tabacos']; ?></td>
                        
                        <td class="d-table-cell d-sm-none"><?php echo $row['tipo_tabacos']; ?></td>
                        <td class="d-table-cell d-sm-none"><?php echo $row['marca_tabacos']; ?></td>
                        <td class="d-table-cell d-sm-none"><?php echo $row['nombre_tabacos']; ?></td>
                        <td class="d-table-cell d-sm-none"><?php echo $row['descripcion_tabacos']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <style>
        .table-sm th, .table-sm td {
            font-size: 12px; /* Tamaño de fuente más pequeño */
        }
        .table-sm tbody tr {
            background-color: #f8f9fa; /* Color de fondo de las filas */
        }
        .table-sm tbody tr:hover {
            background-color: #e9ecef; /* Color de fondo al pasar el ratón */
        }

        /* Tamaño de fuente más grande en PC */
        @media (min-width: 576px) {
            .d-none.d-sm-table-cell,
            .d-table-cell.d-sm-none {
                font-size: 16px;
            }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("buscador").addEventListener("keyup", function() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("buscador");
                filter = input.value.toUpperCase();
                table = document.getElementsByTagName("table")[0];
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td");
                    for (var j = 0; j < td.length; j++) {
                        if (td[j]) {
                            txtValue = td[j].textContent || td[j].innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                                break;
                            } else {
                                tr[i].style.display = "none";
                            }
                        }
                    }
                }
            });
        });
    </script>
    <?php
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
