<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;

session_start();
include 'includes/conexion.php';

header('Content-Type: application/json');

// Asegurarse de que el carrito no esté vacío
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo json_encode(['status' => 'error', 'message' => 'El carrito está vacío.']);
    exit;
}

// Crear un nuevo objeto DOMPDF
$dompdf = new Dompdf();

// Generar un número de pedido aleatorio
$numeroPedido = rand(100000, 999999);

// Obtener los datos del carrito
$carrito = $_SESSION['carrito'];
$total = 0;
$contenidoHtml = "
<style>
    body { font-family: Arial, sans-serif; }
    h1 { text-align: center; color: #333; }
    table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
    th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
    th { background-color: #f4f4f4; color: #333; }
    tr:nth-child(even) { background-color: #f9f9f9; }
    tr:hover { background-color: #f1f1f1; }
    .total { text-align: right; margin-top: 20px; }
</style>
<h1>Resumen del Pedido</h1>
<p>Número de Pedido: <strong>{$numeroPedido}</strong></p>
<table>
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>";

foreach ($carrito as $item) {
    $itemTotal = $item['precio'] * $item['cantidad'];
    $total += $itemTotal;
    $precioFormateado = number_format($itemTotal, 2, ',', '.');
    $contenidoHtml .= "<tr>
        <td>{$item['nombre']}</td>
        <td>{$item['cantidad']}</td>
        <td>{$precioFormateado} €</td>
    </tr>";
}

$iva = $total * 0.21;
$totalConIva = $total + $iva;
$totalFormateado = number_format($total, 2, ',', '.');
$ivaFormateado = number_format($iva, 2, ',', '.');
$totalConIvaFormateado = number_format($totalConIva, 2, ',', '.');

$contenidoHtml .= "</tbody>
</table>
<div class='total'>
    <p>Subtotal: {$totalFormateado} €</p>
    <p>IVA (21%): {$ivaFormateado} €</p>
    <p><strong>Total: {$totalConIvaFormateado} €</strong></p>
</div>";

// Cargar el contenido HTML en DOMPDF
$dompdf->loadHtml($contenidoHtml);

// Renderizar el PDF
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Enviar el PDF al navegador para su descarga
$pdfOutput = $dompdf->output();
$filePath = "resumen_pedido_{$numeroPedido}.pdf";
file_put_contents($filePath, $pdfOutput);

echo json_encode(['status' => 'success', 'file' => $filePath]);
?>
