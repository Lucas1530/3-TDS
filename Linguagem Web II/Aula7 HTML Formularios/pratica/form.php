<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com formulario</title>
</head>

<body>
    <h1>Cadastro de escola</h1>
<!-- GET é Mesma coisa -->
    <form method="POST" action="form_exec.php">
        <input type="text" placeholder="informe o nome" name="nomeescola">


        <br><br>

        <select name="nivel">
            <option selected>|Selecione um Nível|</option>
            <option value="I">|Infantil|</option>
            <option value="F">|Fundamental|</option>
            <option value="M">|Médio|</option>
        </select>


        <br><br>

        <input type="submit" value="Enviar" />


    </form>
</body>

</html>
