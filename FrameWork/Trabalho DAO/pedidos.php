<?php
include "conexao.php";

class Pedido {
    private $con = Conexao::conectar();

    function inserir($obj) {
        $sql = "INSERT INTO PEDIDOS (id_pedido, id_cliente, data_pedido, total) VALUES (?, ?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($obj->getId_pedido(), $obj->getId_cliente(), $obj->getData_pedido(), $obj->getTotal());
    }
}
?>
