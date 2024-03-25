<?php

//Função para desenhar uma linha da tabela
function desenharLinha(array $linha) {
  echo "<tr>";
  foreach ($linha as $valor) {
    echo "<td>$valor</td>";
  }
  echo "</tr>";
}

// A - Declarando os arrays associativos (um para cada linha)
$linhas = array(
  array("Ordem" => "1", "País" => "EUA", "ouro" => 46, "prata" => 37, "bronze" => 38, "total" => 121),
  array("Ordem" => "2", "País" => "Grã-Bretanha", "ouro" => 27, "prata" => 23, "bronze" => 17, "total" => 67),
  array("Ordem" => "3", "País" => "China", "ouro" => 26, "prata" => 18, "bronze" => 25, "total" => 70),
  array("Ordem" => "4", "País" => "Rússia", "ouro" => 19, "prata" => 17, "bronze" => 20, "total" => 56),
  array("Ordem" => "5", "País" => "Alemanha", "ouro" => 17, "prata" => 10, "bronze" => 15, "total" => 42),
);

// B - Criando a tabela
echo "<table border='2'>";

// Cabeçalho da tabela
echo "<tr>";
echo "<th>Ordem</th>";
echo "<th>País</th>";
echo "<th>Ouro</th>";
echo "<th>Prata</th>";
echo "<th>Bronze</th>";
echo "<th>Total</th>";
echo "</tr>";

// C - Percorrer as linhas e gerar a tabela
foreach ($linhas as $linha) {
  desenharLinha($linha);
}

echo "</table>";

?>
