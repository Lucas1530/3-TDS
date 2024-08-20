<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
</head>

<body>
</body>

</html>

<?php

// veiculo_exec.php

// Classe Veículo
class Veiculo
{
    // Atributos
    private $modelo;
    private $marca;
    private $combustivel;

    // Métodos

    public function getDescricaoCombustivel()
    {
        switch ($this->combustivel) {
            case 'A':
                return "Álcool";
            case 'G':
                return "Gasolina";
            case 'F':
                return "Flex";
            default:
                return "Desconhecido";
        }
    }

    // GETs e SETs

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = htmlspecialchars($modelo);
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
     */
    public function setMarca($marca): self
    {
        $this->marca = htmlspecialchars($marca);
        return $this;
    }

    /**
     * Get the value of combustivel
     */
    public function getCombustivel()
    {
        return $this->combustivel;
    }

    /**
     * Set the value of combustivel
     */
    public function setCombustivel($combustivel): self
    {
        $this->combustivel = htmlspecialchars($combustivel);
        return $this;
    }
} // Fim classe Veiculo


$veiculo1 = new Veiculo();
$veiculo1->setModelo($_POST["modelo"] ?? '');
$veiculo1->setMarca($_POST["marca"] ?? '');
$veiculo1->setCombustivel($_POST["combustivel"] ?? '');

// Exibição dos dados do veículo
echo "<h1>Dados informados para o veículo</h1>";
echo "Modelo: " . $veiculo1->getModelo() . "<br>";
echo "Marca: " . $veiculo1->getMarca() . "<br>";
echo "Combustível: " . $veiculo1->getDescricaoCombustivel() . "<br>";
echo "<br><br>";
echo "<a href='veiculo.php'>Cadastrar outro veículo</a>";
?>

