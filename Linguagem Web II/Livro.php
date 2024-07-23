<?php
//Declaração da classe
class Livro{

    //Atributos
    private $titulo;
    private $autor;
    private $genero;
    private $quantipag;

    //Construtor
    public funcion __construct($titulo="",$autor="",$genero="",$quantipag=""){
        $this-> titulo = $titulo;
        $this-> autor = $autor;
        $this-> genero = $genero;
        $this-> $quantipag = $quantipag;
    }

    

    //GETs & SETs

    /**
     * Get the value of titulo
     */
    private function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    private function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    private function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    private function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    private function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    private function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of quantipag
     */
    private function getQuantipag()
    {
        return $this->quantipag;
    }

    /**
     * Set the value of quantipag
     */
    private function setQuantipag($quantipag): self
    {
        $this->quantipag = $quantipag;

        return $this;
    }
} //Fim classe livro

//Programa Principal

$livro1 = new Livro();
$livro1->setTitulo("");
$livro1->setAutor("");
$livro1->setGenero("");
$livro1->setQuantipag("");















// Array gerar Tabela













































































?>