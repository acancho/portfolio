<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$response = array('status' => 'success', 'message' => '', 'data' => array());

if (isset($_POST['id']) && isset($_POST['cantidad']) && isset($_POST['tipo'])) {
    $id = $_POST['id'];
    $cantidad = $_POST['cantidad'];
    $tipo = $_POST['tipo'];
    $key = $tipo . '_' . $id;

    if (isset($_SESSION['carrito'][$key])) {
        $_SESSION['carrito'][$key]['cantidad'] = $cantidad;
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Producto no encontrado en el carrito.';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Datos incompletos proporcionados.';
}

$response['data'] = array_values($_SESSION['carrito']);
echo json_encode($response);
?>
