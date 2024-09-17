<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework MVC</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Configuração do Banco de Dados</h2>
        <form action="conexao.php" method="post">
            <input type="hidden" name="criar" value="1">
            <div class="form-group">
                <label for="servidor">Servidor:</label>
                <input type="text" class="form-control" id="servidor" name="servidor" value="localhost">
            </div>
            <div class="form-group">
                <label for="banco">Banco de Dados:</label>
                <input type="text" class="form-control" id="banco" name="banco" value="framework">
            </div>
            <div class="form-group">
                <label for="usuario">Usuário do Banco de Dados:</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="root">
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
        <div class="mt-3">
            <?php
            if (isset($_GET['msg'])) {
                switch ($_GET['msg']) {
                    case 0:
                        echo '<div class="alert alert-success">Arquitetura do sistema criada com sucesso!</div>';
                        break;
                    case 1:
                        echo '<div class="alert alert-danger">ERRO: Problema ao conectar com o Banco de Dados!</div>';
                        break;
                }
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
