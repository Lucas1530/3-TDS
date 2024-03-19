<?php 

//Função
function desenhar(array $linha) {

}



// A - Declarando os 5 arrays associativos (um para cada linha)
$linha1 = array("Ordem" => "1",
"Páis" => "EUA", "ouro" => 46,
"prata" => 37, "bronze" => 38, "total" => 121,
"bandeira" => "");

$linha2 = array("Ordem" => "2",
"Páis" => "Grã-Bretanha", "ouro" => 27,
"prata" => 23, "bronze" => 17, "total" => 67,
"bandeira" => "");



$linha3 = array("Ordem" => "3",
"Páis" => "China", "ouro" => 26,
"prata" => 18, "bronze" => 25, "total" => 70,
"bandeira" => "");

$linha4 = array("Ordem" => "4",
"Páis" => "Russia", "ouro" => 19,
"prata" => 17, "bronze" => 20, "total" => 56,
"bandeira" => "");

$linha5 = array("Ordem" => "5",
"Páis" => "Alemanha", "ouro" => 17,
"prata" => 10, "bronze" => 15, "total" => 42,
"bandeira" => "");

$linha = array($linha1,$linha2,$linha3,$linha4,$linha5);

echo " <table border = '2'>";
echo "<tr>";
echo "<td> Ordem </td>";
echo "<td> Páis </td>";
echo "<td> ouro </td>";
echo "<td> prata </td>";
echo "<td> bronze </td>";


for ($i= 0; $i < count($pessoas)  ; $i++) { 
    echo"<tr>";
    foreach ($linha[$i] as $p) {
        echo "<td> $p </td>";
    }

    echo"</tr>";
}





// B - Criar a matriz


//C - Percorre a matriz para gerar as linhas da tabela (chamar função)



?>
