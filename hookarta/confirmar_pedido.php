<?php
include 'includes/conexion.php';

if ($mysqli) {
    // Obtener el carrito actual
    $result = $mysqli->query("SELECT * FROM carrito WHERE estado='activo' LIMIT 1");
    if ($result && $result->num_rows > 0) {
        $carrito = $result->fetch_assoc();
        $carritoId = $carrito['id_carrito'];

        // Crear el pedido
        $usuarioId = 1; // Reemplaza con el ID del usuario actual
        $mesaPedidos = 'Mesa 1'; // Reemplaza con el identificador de la mesa actual
        $identificadorMesa = $carrito['identificador_mesa'];

        $mysqli->query("INSERT INTO pedidos (id_usuario_pedidos, mesa_pedidos, identificador_mesa) VALUES ($usuarioId, '$mesaPedidos', '$identificadorMesa')");
        $pedidoId = $mysqli->insert_id;

        // Mover detalles del carrito a los detalles del pedido
        $detallesResult = $mysqli->query("SELECT * FROM detalles_carrito WHERE id_carrito = $carritoId");
        if ($detallesResult) {
            while ($detalle = $detallesResult->fetch_assoc()) {
                $idComida = $detalle['id_comida'] ?? 'NULL';
                $idBebida = $detalle['id_bebida'] ?? 'NULL';
                $idTabaco = $detalle['id_tabaco'] ?? 'NULL';
                $idCachimba = $detalle['id_cachimba'] ?? 'NULL';
                $cantidad = $detalle['cantidad'];

                $mysqli->query("INSERT INTO detallespedido (id_pedido_detallespedido, id_comida_detallespedido, id_tabaco_detallespedido, id_cachimba_detallespedido, id_bebidas_detallespedido)
                                VALUES ($pedidoId, $idComida, $idTabaco, $idCachimba, $idBebida)");
            }
        }

        // Marcar el carrito como finalizado
        $mysqli->query("UPDATE carrito SET estado='finalizado' WHERE id_carrito = $carritoId");

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Carrito no encontrado.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error al conectar a la base de datos.']);
}
?>
