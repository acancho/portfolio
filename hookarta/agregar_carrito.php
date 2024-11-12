<?php
session_start();
require 'includes/conexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

$response = array('status' => 'success', 'message' => '', 'data' => array());

if (isset($_POST['id']) && isset($_POST['tipo'])) {
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];

    if ($tipo == 'bebida' || $tipo == 'comida') {
        $cantidad = $_POST['cantidad'];
        $key = $tipo . '_' . $id;

        if ($tipo == 'bebida') {
            $result = $mysqli->query("SELECT * FROM bebidas WHERE id_bebidas = $id");
            $nombre_campo = 'nombre_bebidas';
            $precio_campo = 'precio_bebidas';
        } else if ($tipo == 'comida') {
            $result = $mysqli->query("SELECT * FROM comida WHERE id_comida = $id");
            $nombre_campo = 'nombre_comida';
            $precio_campo = 'precio_comida';
        }

        if ($result && $row = $result->fetch_assoc()) {
            if (isset($_SESSION['carrito'][$key])) {
                $_SESSION['carrito'][$key]['cantidad'] += $cantidad;
            } else {
                $_SESSION['carrito'][$key] = array(
                    'id' => $id,
                    'nombre' => $row[$nombre_campo],
                    'precio' => $row[$precio_campo],
                    'cantidad' => $cantidad,
                    'tipo' => $tipo
                );
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error al obtener los datos del producto.';
        }
    } elseif ($tipo == 'cachimba' && isset($_POST['tabacos']) && isset($_POST['precio'])) {
        $tabacos = $_POST['tabacos'];
        $precio = $_POST['precio'];
        $result = $mysqli->query("SELECT * FROM cachimbas WHERE id_cachimbas = $id");
        if ($result && $row = $result->fetch_assoc()) {
            $key = 'cachimba_' . $id . '_' . implode('_', $tabacos);

            // Obtener nombres de los tabacos
            $tabacosInfo = array();
            foreach ($tabacos as $tabacoId) {
                $tabacoResult = $mysqli->query("SELECT nombre_tabacos FROM tabacos WHERE id_tabacos = $tabacoId");
                if ($tabacoResult && $tabacoRow = $tabacoResult->fetch_assoc()) {
                    $tabacosInfo[] = array('id' => $tabacoId, 'nombre' => $tabacoRow['nombre_tabacos']);
                }
            }

            if (isset($_SESSION['carrito'][$key])) {
                $_SESSION['carrito'][$key]['cantidad'] += 1;
            } else {
                $_SESSION['carrito'][$key] = array(
                    'id' => $id,
                    'nombre' => $row['nombre_cachimbas'],
                    'precio' => $precio,
                    'cantidad' => 1,
                    'tipo' => 'cachimba',
                    'tabacos' => $tabacosInfo
                );
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error al obtener los datos de la cachimba.';
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Datos incompletos proporcionados.';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Datos incompletos proporcionados.';
}

$response['data'] = array_values($_SESSION['carrito']);
echo json_encode($response);
?>
