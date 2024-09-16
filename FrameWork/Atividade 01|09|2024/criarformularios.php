<?php
include "sistema/dao/conexao.php";
$conn=Conexao::conectar();
$banco="Tables_in_".$_GET["bd"];
$query = $conn->query("show tables");
$tabelas = $query->fetchALL(PDO::FETCH_OBJ);
$tb="Tables_in_".$_GET["bd"];
echo "<form method='post' action='#'>";
echo "<select name=\"tabelas\">";
foreach ($tabelas as $tabela) {
    echo "<option>".$tabela->$tb."</option>";
}
echo "</select>";
echo "<button type='submit'>Criar</button>";
if($_POST){
    $queryAttr = $conn->query("show columns from " . $_POST["tabelas"]);
    $atributos = $queryAttr->fetchAll(PDO::FETCH_OBJ);
    foreach ($atributos as $atributo) {
        echo $atributo->Field . "\n";
    }
}

?>
