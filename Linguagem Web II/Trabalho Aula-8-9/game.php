<?php
include_once("conexao.php");

// Criação da conexão
$conn = Conexao::getConexao();

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
    $icone = sanitize($_POST['icone']);
    
    // Validação
    if (empty($nome) || empty($genero) || empty($plataforma) || empty($ano_lancamento)) {
        echo "Todos os campos são obrigatórios.";
    } else {
        $sql = "INSERT INTO jogos (nome, genero, plataforma, ano_lancamento, icone) VALUES (:nome, :genero, :plataforma, :ano_lancamento, :icone)";
        $stm = $conn->prepare($sql);
        if ($stm->execute([':nome' => $nome, ':genero' => $genero, ':plataforma' => $plataforma, ':ano_lancamento' => $ano_lancamento, ':icone' => $icone])) {
            echo "Novo jogo cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o jogo.";
        }
    }
}


// Exclusão de um jogo
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM jogos WHERE id = :id";
    $stm = $conn->prepare($sql);
    if ($stm->execute([':id' => $id])) {
        echo "Jogo excluído com sucesso!";
    } else {
        echo "Erro ao excluir o jogo.";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Cadastro de Jogos Eletrônicos</title>
</head>
<body>
    <h1>Cadastro de Jogos Eletrônicos</h1>

    <form action="" method="post" >
        <label for="nome w-25 p-1">Nome:</label>
        
        <input class="form-control w-25 p-1" aria-describedby="basic-addon1" type="text" id="nome" name="nome" >
        <br>

        <label for="genero">Gênero:</label>
        <select class="form-select w-25 p-1" aria-label="Default select example" id="genero" name="genero" >
            <option selected value="">Selecione um gênero</option>
            <option value="Ação">Ação</option>
            <option value="Aventura">Aventura</option>
            <option value="Estratégia">Estratégia</option>
            <option value="RPG">RPG</option>
            <option value="Esporte">Esporte</option>
            <option value="Simulação">Simulação</option>
        </select>
        <br>

        <label for="plataforma">Plataforma:</label>
        <select class="form-select w-25 p-1" aria-label="Default select example" id="plataforma" name="plataforma" >
            <option value="">Selecione uma plataforma</option>
            <option value="PC">PC</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Xbox">Xbox</option>
            <option value="Nintendo Switch">Nintendo Switch</option>
        </select>
        <br>

        <label for="ano_lancamento">Ano de Lançamento:</label>
        <input class="form-control w-25 p-1" aria-describedby="basic-addon1" type="number" id="ano_lancamento" name="ano_lancamento" min="1900" max="2100" >
        <br>
        <label for="icone">Icone do Game:</label>
<input class="form-control w-25 p-1" aria-describedby="basic-addon1" type="text" id="icone" name="icone">
<br>


        <input class="btn btn-primary" type="submit" name="submit" value="Cadastrar Jogo">
    </form>

    <h2>Lista de Jogos</h2>
    <table class="table table-striped w-50 p-3" border="1">
    <tr>
        <th>ID</th>
        <th>Ícone</th>
        <th>Nome</th>
        <th>Gênero</th>
        <th>Plataforma</th>
        <th>Ano de Lançamento</th>
        <th>Ação</th>
    </tr>
    <?php while ($row = $result->fetch()): ?>
    <tr>
        <td><?php echo htmlspecialchars($row['id']); ?></td>
        <td>
            <?php if (!empty($row['icone'])): ?>
                <img src="<?php echo htmlspecialchars($row['icone']); ?>" alt="Ícone do jogo" style="width: 50px; height: 50px;">
            <?php else: ?>
                <img src="default-icon.png" alt="Ícone padrão" style="width: 50px; height: 50px;">
            <?php endif; ?>
        </td>
        <td><?php echo htmlspecialchars($row['nome']); ?></td>
        <td><?php echo htmlspecialchars($row['genero']); ?></td>
        <td><?php echo htmlspecialchars($row['plataforma']); ?></td>
        <td><?php echo htmlspecialchars($row['ano_lancamento']); ?></td>
        <td>
            <a class="btn btn-outline-danger" href="?delete=<?php echo htmlspecialchars($row['id']); ?>" onclick="return confirm('Tem certeza que deseja excluir este jogo?');">Excluir</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>


    <script>
        function validarCampos() {
            var nome = document.getElementById("nome").value;
            var genero = document.getElementById("genero").value;
            var plataforma = document.getElementById("plataforma").value;
            var anoLancamento = document.getElementById("ano_lancamento").value;

            // Validar se os campos foram preenchidos
            if (nome.trim() == "") {
                alert("Preencha o nome do jogo!");
                return false;
            }

            if (genero.trim() == "") {
                alert("Selecione um gênero!");
                return false;
            }

            if (plataforma.trim() == "") {
                alert("Selecione uma plataforma!");
                return false;
            }

            if (anoLancamento.trim() == "" || isNaN(anoLancamento)) {
                alert("Preencha um ano de lançamento válido!");
                return false;
            }

            return true;
        }
    </script>

</body>
</html>
