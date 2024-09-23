<?php
include_once("conexao.php");

// Criação da conexão
$conn = Conexao::getConexao();

// Função para sanitizar dados
function sanitize($data) {
    return htmlspecialchars(strip_tags($data));
}

// Mensagens de erro e sucesso
$error_message = '';
$success_message = '';

// Inserção de um novo jogo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $nome = sanitize($_POST['nome']);
    $genero = sanitize($_POST['genero']);
    $plataforma = sanitize($_POST['plataforma']);
    $ano_lancamento = sanitize($_POST['ano_lancamento']);
    $icone = sanitize($_POST['icone']);
    
    // Validação
    if (empty($nome) || empty($genero) || empty($plataforma) || empty($ano_lancamento)) {
        $error_message = "Todos os campos são obrigatórios.";
    } else {
        $sql = "INSERT INTO jogos (nome, genero, plataforma, ano_lancamento, icone) VALUES (:nome, :genero, :plataforma, :ano_lancamento, :icone)";
        $stm = $conn->prepare($sql);
        if ($stm->execute([':nome' => $nome, ':genero' => $genero, ':plataforma' => $plataforma, ':ano_lancamento' => $ano_lancamento, ':icone' => $icone])) {
            $success_message = "Novo jogo cadastrado com sucesso!";
        } else {
            $error_message = "Erro ao cadastrar o jogo.";
        }
    }
}

// Exclusão de um jogo
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $sql = "DELETE FROM jogos WHERE id = :id";
    $stm = $conn->prepare($sql);
    if ($stm->execute([':id' => $id])) {
        $success_message = "Jogo excluído com sucesso!"; // Mensagem de sucesso na exclusão
    } else {
        $error_message = "Erro ao excluir o jogo.";
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
    <style>
        body {
            background-image: url('https://wallpapercave.com/wp/wc1765288.jpg');
            background-size: cover;
            background-position: center;
            color: white; /* Para garantir que o texto seja legível */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.7); /* Para dar um fundo escuro à área do formulário */
            padding: 20px;
            border-radius: 10px;
        }
        img.icon {
            width: 70px; /* Tamanho médio do ícone */
            height: auto; /* Mantém a proporção */
        }
        .header {
            text-align: center; /* Centraliza o ícone e o título */
            margin-bottom: 20px; /* Espaço abaixo do cabeçalho */
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="header"> <!-- Adiciona um contêiner para centralizar ícone e título -->
            <img src="https://cdn-icons-png.freepik.com/512/771/771241.png" alt="Ícone de Jogos" class="icon mx-auto d-block">
            <h1>Cadastro de Jogos Eletrônicos</h1>
        </div>
        
        <?php if ($error_message): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error_message; ?> Por favor, preencha os campos obrigatórios!
            </div>
        <?php endif; ?>
        
        <?php if ($success_message): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?>
            </div>
        <?php endif; ?>

        <form action="" method="post" onsubmit="return validarCampos()">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input class="form-control" type="text" id="nome" name="nome" onblur="validarCampo('nome')">
                <div id="feedback-nome" class="alert alert-danger" role="alert" style="display: none;">Preencha o nome do jogo!</div>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Gênero:</label>
                <select class="form-select" id="genero" name="genero" onblur="validarCampo('genero')">
                    <option value="">Selecione um gênero</option>
                    <option value="Ação">Ação</option>
                    <option value="Aventura">Aventura</option>
                    <option value="Estratégia">Estratégia</option>
                    <option value="RPG">RPG</option>
                    <option value="Esporte">Esporte</option>
                    <option value="Simulação">Simulação</option>
                </select>
                <div id="feedback-genero" class="alert alert-danger" role="alert" style="display: none;">Selecione um gênero!</div>
            </div>
            <div class="mb-3">
                <label for="plataforma" class="form-label">Plataforma:</label>
                <select class="form-select" id="plataforma" name="plataforma" onblur="validarCampo('plataforma')">
                    <option value="">Selecione uma plataforma</option>
                    <option value="PC">PC</option>
                    <option value="PlayStation">PlayStation</option>
                    <option value="Xbox">Xbox</option>
                    <option value="Nintendo Switch">Nintendo Switch</option>
                </select>
                <div id="feedback-plataforma" class="alert alert-danger" role="alert" style="display: none;">Selecione uma plataforma!</div>
            </div>
            <div class="mb-3">
                <label for="ano_lancamento" class="form-label">Ano de Lançamento:</label>
                <input class="form-control" type="number" id="ano_lancamento" name="ano_lancamento" min="1900" max="2100" onblur="validarCampo('ano_lancamento')">
                <div id="feedback-ano_lancamento" class="alert alert-danger" role="alert" style="display: none;">Preencha um ano de lançamento válido!</div>
            </div>
            <div class="mb-3">
                <label for="icone" class="form-label">Ícone do Jogo:</label>
                <input class="form-control" type="text" id="icone" name="icone" onblur="validarCampo('icone')">
                <div id="feedback-icone" class="alert alert-danger" role="alert" style="display: none;">Preencha a URL do ícone do jogo!</div>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Cadastrar Jogo</button>
        </form>

        <h2 class="mt-4">Lista de Jogos</h2>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ícone</th>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Plataforma</th>
                    <th>Ano de Lançamento</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
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
            </tbody>
        </table>
    </div>

    <script>
        function validarCampo(campoId) {
            var campo = document.getElementById(campoId);
            var valor = campo.value.trim();
            var feedback = document.getElementById("feedback-" + campoId);

            if (valor === "") {
                feedback.style.display = 'block';
            } else {
                feedback.style.display = 'none';
            }
        }

        function validarCampos() {
            var valid = true;
            var campos = ['nome', 'genero', 'plataforma', 'ano_lancamento', 'icone']; // Adicione 'icone' aqui

            campos.forEach(function(campoId) {
                var campo = document.getElementById(campoId);
                var valor = campo.value.trim();
                var feedback = document.getElementById("feedback-" + campoId);

                if (valor === "") {
                    feedback.style.display = 'block';
                    valid = false;
                } else {
                    feedback.style.display = 'none';
                }
            });

            return valid;
        }
    </script>
</body>
</html>
