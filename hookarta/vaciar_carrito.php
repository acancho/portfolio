<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$response = array('status' => 'success', 'message' => '', 'data' => array());

if (isset($_SESSION['carrito'])) {
    unset($_SESSION['carrito']);
    $_SESSION['carrito'] = array();
    $response['message'] = 'Carrito vaciado correctamente.';
} else {
    $response['status'] = 'error';
    $response['message'] = 'No se pudo vaciar el carrito. Carrito no existe.';
}

$response['data'] = array_values($_SESSION['carrito']);
echo json_encode($response);

?>

