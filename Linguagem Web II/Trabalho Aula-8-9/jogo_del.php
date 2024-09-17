<?php
include_once("conexao.php");

$id = 0;
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
}

if ($id) {
    // Se encontrou o ID do jogo, excluir
    $conn = Conexao::getConexao();
    $sql = "DELETE FROM jogos WHERE id = ?";
    $stm = $conn->prepare($sql);
    $stm->execute([$id]);

    // Redirecionar para a página principal
    header("location: jogos.php");
} else {
    // Caso não receba o ID, mostra a mensagem de ID inválido
    echo "ID do jogo inválido.<br>";
    echo '<a href="jogos.php">Voltar</a>';
}
?>
