<?php
// Declaração da Classe
class Livro {

    // Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePaginas;

    // Construtor
    public function __construct($titulo="", $autor="", $genero="", $quantidadePaginas=0){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->quantidadePaginas = $quantidadePaginas;
    }

    // GETs & SETs

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): self {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor): self {
        $this->autor = $autor;
        return $this;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero): self {
        $this->genero = $genero;
        return $this;
    }

    public function getQuantidadePaginas() {
        return $this->quantidadePaginas;
    }

    public function setQuantidadePaginas($quantidadePaginas): self {
        $this->quantidadePaginas = $quantidadePaginas;
        return $this;
    }
} // Fim da Classe Livro

// 2.1: Criação dos objetos
$livro1 = new Livro("Dom Casmurro", "Machado de Assis", "Romance", 256);
$livro2 = new Livro("1984", "George Orwell", "Distopia", 328);
$livro3 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", "Fantasia", 1216);

// Adicionando os objetos em um array
$livros = array($livro1, $livro2, $livro3);

//Exibindo os atributos dos objetos Livro em uma tabela
echo "<table border='1'>
<tr>
    <th>Título</th>
    <th>Autor</th>
    <th>Gênero</th>
    <th>Quantidade de Páginas</th>
</tr>";

foreach ($livros as $livro) {
    echo "<tr>
        <td>" . $livro->getTitulo() . "</td>
        <td>" . $livro->getAutor() . "</td>
        <td>" . $livro->getGenero() . "</td>
        <td>" . $livro->getQuantidadePaginas() . "</td>
    </tr>";
}

echo

<?
