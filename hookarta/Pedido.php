<?php
class Pedido {
    private $mysqli;
    private $id_usuario;
    private $numero_pedido;

    public function __construct($mysqli, $id_usuario) {
        $this->mysqli = $mysqli;
        $this->id_usuario = $id_usuario;
        $this->numero_pedido = $this->generarNumeroPedido();
    }

    private function generarNumeroPedido() {
        $query = "SELECT MAX(numero_pedido) as max_numero FROM pedidos";
        $result = $this->mysqli->query($query);
        if ($result) {
            $row = $result->fetch_assoc();
            return $row['max_numero'] + 1;
        } else {
            throw new Exception('Error al generar el número de pedido: ' . $this->mysqli->error);
        }
    }

    public function guardar() {
        $query = "INSERT INTO pedidos (id_usuario_pedidos, numero_pedido, estado) VALUES ('$this->id_usuario', '$this->numero_pedido', 'pendiente')";
        if ($this->mysqli->query($query)) {
            $id_pedido = $this->mysqli->insert_id;
            $this->guardarDetalles($id_pedido);
            return ['status' => 'success', 'id_pedido' => $id_pedido];
        } else {
            throw new Exception('Error al guardar el pedido: ' . $this->mysqli->error);
        }
    }

    private function guardarDetalles($id_pedido) {
        $query_detalles = "INSERT INTO detallespedido (id_pedido_detallespedido, id_comida_detallespedido, id_tabaco_detallespedido, id_cachimba_detallespedido, id_bebidas_detallespedido)
                           SELECT $id_pedido, id_comida, id_tabaco, id_cachimba, id_bebida
                           FROM detalles_carrito";
        if (!$this->mysqli->query($query_detalles)) {
            throw new Exception('Error al guardar los detalles del pedido: ' . $this->mysqli->error);
        }
    }
}
?>
