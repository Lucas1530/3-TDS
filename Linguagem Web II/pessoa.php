<?php
//Declaração Classe
class Pessoa {

    //Atributos

    private $nome;
    private $sobrenome;

    //Construtor

    public function __construct($nome="",$sobrenome=""){
        $this-> nome = $nome;
        $this-> sobrenome = $sobrenome;
    }

    //Métodos

    public function nomeCompleto() {

    }

    //GETs & SETs

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }
} //Fim da Classe Pessoa

$pessoa1 = new Pessoa();
$pessoa1->setNome("Lucas");
$pessoa1->setSobrenome("Conradi");
echo $pessoa1->nomeCompleto();
echo '<br>';


$pessoa2 = new Pessoa("Vinicius","Da Paz");
echo $pessoa2->nomeCompleto();

echo'<br>';

$pessoa3 = new Pessoa("Erick Dias", "Paulino");
echo $pessoa3->nomeCompleto();

?>












































?>