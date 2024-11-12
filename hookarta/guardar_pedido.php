<?php
include 'includes/conexion.php';
session_start();

header('Content-Type: application/json');

$response = array();

if ($mysqli) {
    if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
        $response['status'] = 'error';
        $response['message'] = 'El carrito está vacío.';
        echo json_encode($response);
        exit;
    }

    $carrito = $_SESSION['carrito'];
    $numeroPedido = rand(100000, 999999);

    $total = 0;
    foreach ($carrito as $item) {
        $total += $item['precio'] * $item['cantidad'];
    }

    $query = "INSERT INTO pedidos (numero_pedido, total) VALUES ('$numeroPedido', '$total')";
    if ($mysqli->query($query)) {
        $pedidoId = $mysqli->insert_id;

        foreach ($carrito as $item) {
            $itemId = $item['id'];
            $cantidad = $item['cantidad'];
            $precio = $item['precio'];
            $tipo = $item['tipo'];

            $query = "INSERT INTO detalles_pedido (pedido_id, item_id, cantidad, precio, tipo) VALUES ('$pedidoId', '$itemId', '$cantidad', '$precio', '$tipo')";
            if (!$mysqli->query($query)) {
                $response['status'] = 'error';
                $response['message'] = 'Error al guardar los detalles del pedido: ' . $mysqli->error;
                echo json_encode($response);
                exit;
            }
        }

        $resumenHtml = "<h3>Número de Pedido: $numeroPedido</h3>";
        $resumenHtml .= "<ul>";
        foreach ($carrito as $item) {
            $resumenHtml .= "<li>" . $item['nombre'] . " - Cantidad: " . $item['cantidad'] . " - Precio: " . ($item['precio'] * $item['cantidad']) . "€</li>";
        }
        $resumenHtml .= "</ul>";
        $resumenHtml .= "<p><strong>Total: $total€</strong></p>";

        $response['status'] = 'success';
        $response['data'] = $resumenHtml;

        unset($_SESSION['carrito']);
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error al guardar el pedido: ' . $mysqli->error;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error al conectar a la base de datos.';
}

echo json_encode($response);
?>
