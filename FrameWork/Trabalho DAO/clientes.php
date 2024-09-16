<?php
include "conexao.php";

class Cliente {
    private $con = Conexao::conectar();

    function inserir($obj) {
        $sql = "INSERT INTO CLIENTES (id_cliente, nome, email, telefone) VALUES (?, ?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($obj->getId_cliente(), $obj->getNome(), $obj->getEmail(), $obj->getTelefone());
    }
}
?>
