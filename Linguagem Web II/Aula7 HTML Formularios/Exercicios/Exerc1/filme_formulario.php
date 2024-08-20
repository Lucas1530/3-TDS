<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastre seu filmer</title>
</head>

<body>
    <h1> Cadastre seu filme </h1>
    <form method="POST" action="filme_card.php">
        <!--nome-->
        <input type="text" name="nome" placeholder="Informe nome do Filme" />
        <br><br>
        <!--diretor-->
        <input type="text" name="diretor" placeholder="Informe o Diretor" />
        <br><br>
        <!--ano-->
        <input type="number" name="ano" placeholder="Informe o Ano" />
        <br><br>
        <!--foto-->
        <input type="text" name="foto" placeholder="Informe a foto" />
        <br><br>

        <!--Enviar-->
        <button>Gerar Card</button>
    </form>
</body>

</html>
