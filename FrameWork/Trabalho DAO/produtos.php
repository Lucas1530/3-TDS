<?php
include "conexao.php";

class Produto {
    private $con = Conexao::conectar();

    function inserir($obj) {
        $sql = "INSERT INTO PRODUTOS (id_produto, nome_produto, descricao, preco) VALUES (?, ?, ?, ?)";
        $stmt = $this->con->prepare($sql);
        $stmt->execute($obj->getId_produto(), $obj->getNome_produto(), $obj->getDescricao(), $obj->getPreco());
    }
}
?>
