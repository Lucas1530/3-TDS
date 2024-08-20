<?php

$nome = $_POST['nome'];

$diretor = $_POST['diretor'];

$ano = $_POST['ano'];

$foto = $_POST['foto'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Card Filme </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div style='border: solid 1px; width: 300px; margin-top: 20px;'>
        <?php echo $nome; ?><br>
        <?php echo $diretor; ?><br>
        <?php echo $ano; ?><br>
        <img style='width: 100%; height: auto;' src='<?php echo $foto ?>' /><br>
    </div>

    <a href="filme_formulario.php">Voltar</a>

</body>

</html>
