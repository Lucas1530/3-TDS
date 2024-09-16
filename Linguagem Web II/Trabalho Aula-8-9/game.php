<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jogos_db";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função para sanitizar dados
function sanitize($data) {
    return htmlspecialchars(strip_tags($data));
}

// Inserção de um novo jogo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $nome = sanitize($_POST['nome']);
    $genero = sanitize($_POST['genero']);
    $plataforma = sanitize($_POST['plataforma']);
    $ano_lancamento = sanitize($_POST['ano_lancamento']);
    
    // Validação
    if (empty($nome) || empty($genero) || empty($plataforma) || empty($ano_lancamento)) {
        echo "Todos os campos são obrigatórios.";
    } else {
        $sql = "INSERT INTO jogos (nome, genero, plataforma, ano_lancamento) VALUES ('$nome', '$genero', '$plataforma', '$ano_lancamento')";
        if ($conn->query($sql) === TRUE) {
            echo "Novo jogo cadastrado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Exclusão de um jogo
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM jogos WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Jogo excluído com sucesso!";
    } else {
        echo "Erro ao excluir o jogo: " . $conn->error;
    }
}

// Listagem dos jogos
$sql = "SELECT * FROM jogos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Jogos Eletrônicos</title>
</head>
<body>
    <h1>Cadastro de Jogos Eletrônicos</h1>

    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="">Selecione um gênero</option>
            <option value="Ação">Ação</option>
            <option value="Aventura">Aventura</option>
            <option value="Estratégia">Estratégia</option>
            <option value="RPG">RPG</option>
            <option value="Esporte">Esporte</option>
            <option value="Simulação">Simulação</option>
        </select>
        <br>

        <label for="plataforma">Plataforma:</label>
        <select id="plataforma" name="plataforma" required>
            <option value="">Selecione uma plataforma</option>
            <option value="PC">PC</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Xbox">Xbox</option>
            <option value="Nintendo Switch">Nintendo Switch</option>
        </select>
        <br>

        <label for="ano_lancamento">Ano de Lançamento:</label>
        <input type="number" id="ano_lancamento" name="ano_lancamento" min="1900" max="2100" required>
        <br>

        <input type="submit" name="submit" value="Cadastrar Jogo">
    </form>

    <h2>Lista de Jogos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Plataforma</th>
            <th>Ano de Lançamento</th>
            <th>Ações</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo $row['genero']; ?></td>
                    <td><?php echo $row['plataforma']; ?></td>
                    <td><?php echo $row['ano_lancamento']; ?></td>
                    <td><a href="?delete=<?php echo $row['id']; ?>">Excluir</a></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">Nenhum jogo cadastrado.</td>
            </tr>
        <?php endif; ?>
    </table>

    <?php $conn->close(); ?>
</body>
</html>