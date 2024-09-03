<?php
//Configuração de ERRO 
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Incluindo Caminho

include_once("conexao.php");



$conn = Conexao::getConexao();


//Verificação se o usuario clicou no gravar

if (isset($_POST['titulo'])) {

    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $qtdpag = $_POST['qtdpag'];

    $sql = "INSERT INTO livros (titulo,genero,qtd_paginas)
    VALUES ( ?, ?, ? )";
    $stm = $conn->prepare($sql);
    $stm->execute([$titulo, $genero, $qtdpag]);

    //Redirecionar para a página desejada

    header("locacion:livros.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de livros</title>
</head>

<body>
    <h3>Formulário do livro</h3>
    <form method="POST">

        <input type="text" name="titulo" placeholder="Informe o título" />
        <br><br>

        <select name="genero">
            <option value="">Seleciona Genero</option>
            <option value="A">Aventura</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="T">Terror</option>
        </select>
        <br><br>

        <input type="number" name="qtdpag" placeholder="Informe a Quantidade de Páginas">
        <br><br>

        <input type="submit" class="btn btn-primary" value="Gravar" />
        <input type="reset" class="btn btn btn-secondary" value="Limpar" />
    </form>

    <h3>Listagem de livros</h3>

    <?php
    $sql = "SELECT * FROM livros";
    $stm = $conn->prepare($sql);
    $stm->execute();
    $livros = $stm->fetchALL();

    ?>

    <table class="table table-striped" border="1">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Quantidade de paginas</th>
            <th></th>
        </tr>

        <?php foreach ($livros as $l): ?>
            <tr>
                <td><?php echo $l["id"]; ?></td>
                <td><?php echo $l["titulo"]; ?></td>
                <td><?php echo $l["genero"]; ?></td>
                <td><?= $l["qtd_paginas"]; ?></td>
                <th>
                    <a class="btn btn-outline-danger" href="livro_del.php?id=<?= $l['id'] ?>">Deletar</a>
                </th>
            </tr>
        <?php endforeach; ?>
    </table>


</body>

</html>