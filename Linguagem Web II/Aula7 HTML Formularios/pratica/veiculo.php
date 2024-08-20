<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veiculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h2>Dados do Veículo</h2>
    <form method="POST" action="veiculo_exec.php">
        <input name="modelo" placeholder="Informe o modelo" />
        <br><br>
        <input name="marca" placeholder="Informe a marca" />
        <br><br>
        <select name="combustivel">
            <option value="">Seleciona o combustível</option>
            <option value="A">Álcool</option>
            <option value="G">Gasolina</option>
            <option value="F">Flex</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>
