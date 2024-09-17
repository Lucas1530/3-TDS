<?php
// Inclui o arquivo de conexão com o banco de dados
include_once("conexao.php");

// Verifica se o parâmetro 'delete' foi passado na URL
if (isset($_GET['delete'])) {
    // Obtém e sanitiza o ID do jogo
    $id = intval($_GET['delete']);

    // Cria uma instância da conexão com o banco de dados
    $conn = Conexao::getConexao();
    
    // Prepara e executa a instrução SQL para excluir o jogo
    $sql = "DELETE FROM jogos WHERE id = :id";
    $stm = $conn->prepare($sql);
    $stm->bindParam(':id', $id, PDO::PARAM_INT);

    if ($stm->execute()) {
        echo "Jogo excluído com sucesso!";
        // Redireciona para a página principal após a exclusão
        header("Location: games.php");
        exit;
    } else {
        echo "Erro ao excluir o jogo.";
    }
} else {
    echo "ID do jogo não especificado.<br>";
    echo '<a href="games.php">Voltar</a>';
}
?>
