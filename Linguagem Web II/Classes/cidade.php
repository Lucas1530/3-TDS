<?php
class Cidade {
    public $nome;
    public $habitantes;
    public $area;
    public $altitude;
    public $estado;

    public function __construct($nome, $habitantes, $area, $altitude, $estado) {
        $this->nome = $nome;
        $this->habitantes = $habitantes;
        $this->area = $area;
        $this->altitude = $altitude;
        $this->estado = $estado;
    }
}
// Inclui a classe Cidade
require_once 'Cidade.php';

// Criação de objetos Cidade
$cidades = [
    new Cidade('Foz do Iguaçu', 250000, '500km²', '145m', 'Paraná-PR'),
    new Cidade('Cascavel', 300000, '420km²', '320m', 'Paraná-PR'),
    new Cidade('Chapecó', 240000, '120km²', '620m', 'Santa Catarina-SC'),
    new Cidade('Blumenau', 330000, '200km²', '85m', 'Santa Catarina-SC'),
    new Cidade('Curitiba', 1500000, '300km²', '850m', 'Paraná-PR')
];

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cidades</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Cidades</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Habitantes</th>
            <th>Área</th>
            <th>Altitude</th>
            <th>Estado</th>
        </tr>
        <?php foreach ($cidades as $cidade): ?>
        <tr>
            <td><?php echo $cidade->nome; ?></td>
            <td><?php echo number_format($cidade->habitantes, 0, ',', '.'); ?></td>
            <td><?php echo $cidade->area; ?></td>
            <td><?php echo $cidade->altitude; ?></td>
            <td><?php echo $cidade->estado; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

?>
