<?php
include 'includes/conexion.php';

$id_pedido = $_GET['id_pedido'];

if ($mysqli) {
    // Obtener detalles del pedido
    $query = "SELECT * FROM detallespedido
              LEFT JOIN comida ON detallespedido.id_comida_detallespedido = comida.id_comida
              LEFT JOIN bebidas ON detallespedido.id_bebidas_detallespedido = bebidas.id_bebidas
              LEFT JOIN tabacos ON detallespedido.id_tabaco_detallespedido = tabacos.id_tabacos
              LEFT JOIN cachimbas ON detallespedido.id_cachimba_detallespedido = cachimbas.id_cachimbas
              WHERE id_pedido_detallespedido = $id_pedido";
    $result = $mysqli->query($query);

    if ($result) {
        echo "<h2>Resumen del Pedido #$id_pedido</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            if ($row['nombre_comida']) {
                echo "<li>Comida: " . $row['nombre_comida'] . "</li>";
            }
            if ($row['nombre_bebidas']) {
                echo "<li>Bebida: " . $row['nombre_bebidas'] . "</li>";
            }
            if ($row['nombre_tabacos']) {
                echo "<li>Tabaco: " . $row['nombre_tabacos'] . "</li>";
            }
            if ($row['nombre_cachimbas']) {
                echo "<li>Cachimba: " . $row['nombre_cachimbas'] . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "Error al obtener el resumen del pedido: " . $mysqli->error;
    }
} else {
    echo "Error al conectar a la base de datos.";
}
?>
