<?php
class Retangulo {
    // Atributos
    public $base;
    public $altura;

    // Construtor para inicializar os atributos
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    // Método para calcular a área
    public function calcularArea() {
        return $this->base * $this->altura;
    }

    // Método para calcular o perímetro
    public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
    }
}

// Criação de três objetos Retangulo e configuração de seus atributos
$retangulo1 = new Retangulo(5, 10);
$retangulo2 = new Retangulo(7, 3);
$retangulo3 = new Retangulo(8, 4);

// Impressão dos valores da área e perímetro
echo "Retângulo 1 - Área: " . $retangulo1->calcularArea() . ", Perímetro: " . $retangulo1->calcularPerimetro() . "\n";
echo "Retângulo 2 - Área: " . $retangulo2->calcularArea() . ", Perímetro: " . $retangulo2->calcularPerimetro() . "\n";
echo "Retângulo 3 - Área: " . $retangulo3->calcularArea() . ", Perímetro: " . $retangulo3->calcularPerimetro() . "\n";
?>
