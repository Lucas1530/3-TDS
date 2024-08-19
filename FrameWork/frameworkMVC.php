<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework MVC</title>
</head>

<body>
    <form action="conexao.php" method="post">
        <label for="servidor">servidor</label>

        <input type="text" name="servidor"><br>

        <input type="text" name="servidor"><br>

        <label for="banco">Banco de Dados</label>

        <input type="text" name="banco"><br>

        <label for="usuario">Usúario do Banco de Dados</label>

        <input type="text" name="usuario"><br>

        <label for="senha">senha</label>

        <input type="password" name="senha"><br>

        <input type="submit" value="Criar">

    </form>
    <label>
        <?php
        if (isset($_GET['msg]'])); {
            switch ($_GET['msg']) {
                case 0:
                    echo "Conexão com Banco de Dados realizada com sucesso!";
                    break;
                case 1;
                    echo "ERRO: Problema ao conectar com Banco de Dados!";
                    break;
            }
        }
        ?>
    </label>
</body>

</html>
