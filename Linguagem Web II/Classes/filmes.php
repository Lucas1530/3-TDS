<?php
class Filme {
    public $titulo;
    public $diretor;
    public $ano;
    public $linkFoto;

    public function __construct($titulo, $diretor, $ano, $linkFoto) {
        $this->titulo = $titulo;
        $this->diretor = $diretor;
        $this->ano = $ano;
        $this->linkFoto = $linkFoto;
    }
}

// Inclui a classe Filme
require_once 'Filme.php';

// Criação de objetos Filme
$filmes = [
    new Filme('O Poderoso Chefão', 'Francis Coppola', 1972, 'https://link_para_foto1.jpg'),
    new Filme('Pulp Fiction', 'Quentin Tarantino', 1994, 'https://link_para_foto2.jpg'),
    new Filme('O Senhor dos Anéis: A Sociedade do Anel', 'Peter Jackson', 2001, 'https://link_para_foto3.jpg'),
    new Filme('Matrix', 'Lana e Lilly Wachowski', 1999, 'https://link_para_foto4.jpg'),
    new Filme('Inception', 'Christopher Nolan', 2010, 'https://link_para_foto5.jpg')
];

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Filmes</title>
    <style>
        .card {
            border: solid 1px;
            width: 300px;
            margin-top: 20px;
            padding: 10px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Lista de Filmes</h1>
    <?php foreach ($filmes as $filme): ?>
    <div class="card">
        <?php echo $filme->titulo; ?><br>
        <?php echo $filme->diretor; ?><br>
        <?php echo $filme->ano; ?><br>
        <img src="<?php echo $filme->linkFoto; ?>" alt="<?php echo $filme->titulo; ?>"><br>
    </div>
    <?php endforeach; ?>
</body>
</html>

?>
