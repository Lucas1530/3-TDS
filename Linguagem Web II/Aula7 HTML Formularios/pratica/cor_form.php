<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Dados da Cor</h2>
    <form method="POST" action="cor_exec.php">
        <select name="cor">
            <option> Seleciona uma cor</option>

            <option style='background-color:tomato;' value="Tomato">Tomato</option>

            <option style='background-color:orange;' value="Orange">Orange</option>

            <option style='background-color:DodgerBlue;' value="Dogderblue">Dogde Blue</option>

            <option style='background-color:mediumseagreen;' value="MediumSeaGreen">MediumSeaGreen</option>

            <option style='background-color:gray;' value="Gray">Gray</option>

            <option style='background-color:slateblue;' value="SlateBlue">SlateBlue</option>

            <option style='background-color:violet;' value="Violet">Violet</option>

            <option style='background-color:lightgray;' value="LightGray">LightGray</option>

        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
