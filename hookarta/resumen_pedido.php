<?php
include 'includes/conexion.php';

if (isset($_GET['id'])) {
    $pedido_id = $_GET['id'];

    // Obtener información del pedido
    $stmt = $mysqli->prepare("SELECT p.id_pedidos, p.identificador_mesa, p.estado, d.id_comida_detallespedido, d.id_tabaco_detallespedido, d.id_cachimba_detallespedido, d.id_bebidas_detallespedido
                            FROM pedidos p
                            JOIN detallespedido d ON p.id_pedidos = d.id_pedido_detallespedido
                            WHERE p.id_pedidos = ?");
    $stmt->bind_param("i", $pedido_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $pedido = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
} else {
    echo "Pedido no encontrado.";
    exit;
}
?>

<?php include 'includes/head.php'; ?>
<body>
  <!-- NAV -->
  <?php include 'includes/nav.php'; ?>
  <!-- NAV -->
  <div class="container mt-5">
    <h1>Resumen del Pedido</h1>
    <p>ID del Pedido: <?php echo $pedido_id; ?></p>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Producto</th>
          <th>Cantidad</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($pedido as $item) {
            // Mostrar información de los productos según sus IDs
            if ($item['id_comida_detallespedido']) {
                $result = $mysqli->query("SELECT nombre_comida FROM comida WHERE id_comida = " . $item['id_comida_detallespedido']);
                $comida = $result->fetch_assoc();
                echo "<tr><td>" . $comida['nombre_comida'] . "</td><td>1</td></tr>";
            }
            if ($item['id_tabaco_detallespedido']) {
                $result = $mysqli->query("SELECT nombre_tabacos FROM tabacos WHERE id_tabacos = " . $item['id_tabaco_detallespedido']);
                $tabaco = $result->fetch_assoc();
                echo "<tr><td>" . $tabaco['nombre_tabacos'] . "</td><td>1</td></tr>";
            }
            if ($item['id_cachimba_detallespedido']) {
                $result = $mysqli->query("SELECT nombre_cachimbas FROM cachimbas WHERE id_cachimbas = " . $item['id_cachimba_detallespedido']);
                $cachimba = $result->fetch_assoc();
                echo "<tr><td>" . $cachimba['nombre_cachimbas'] . "</td><td>1</td></tr>";
            }
            if ($item['id_bebidas_detallespedido']) {
                $result = $mysqli->query("SELECT nombre_bebidas FROM bebidas WHERE id_bebidas = " . $item['id_bebidas_detallespedido']);
                $bebida = $result->fetch_assoc();
                echo "<tr><td>" . $bebida['nombre_bebidas'] . "</td><td>1</td></tr>";
            }
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
