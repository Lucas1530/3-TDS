<?php 

$palavras = array("Futebol", "Volei", "Computador","Mouse","Garrafa");

$vazio = array();

//Adicionar os elementos no array vazio
foreach ($palavras as $p) {
    array_push($vazio ,$p );
}
//print_r($vazio);

//Exibir os elementos na forme de lista
echo "<ul>";
foreach ($vazio as $p) 
    echo "<li>" . $p . "</li>";
echo "</ul>";

?>
