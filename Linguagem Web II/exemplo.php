<?php
//Declaração da classe
class Computador{

    //Atributos
    private $preco;
    private $marca;

    //Construtor
    public function __construct( $preco=0, $marca="") {
        $this-> preco = $preco;
        $this-> marca =  $marca;
    }

    //Métodos

    public function ligar() {
        echo "Computador ligado";
    }

    public function getDados() {
        //Retornar o preço e a marca do computador
        $dados = $this->preco . "-" . 
            $this->marca;
        return $dados;
    }
    /**
     * Get the value of preco
     */ 
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @return  self
     */ 
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
} //Fim classe Computador

//Programa Principal

$comp = new Computador();
$comp->setPreco(2000);
$comp->setMarca("LG");
$comp->ligar();
echo '<br>';
echo $comp->getPreco() . " - " . $comp->getMarca();
echo '<br>';
echo $comp->getDados();

echo '<br><br><br>';
$comp2= new Computador(1800, "Asus");
echo $comp2->getDados();


























?>