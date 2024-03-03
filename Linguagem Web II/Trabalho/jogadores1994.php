<?php

// Definir as cores
$cor1 = "yellow";
$cor2 = "green";

// Função para gerar uma linha da tabela
function gerarLinha($numero, $nome, $cor) {
  echo "<tr>";
  echo "<td class=\"numero-celula\" style=\"background-color: $cor; padding: 5px;\">$numero</td>";
  echo "<td class=\"nome-celula\" style=\"background-color: $cor; padding: 5px; color: black;\">$nome</td>";
  echo "</tr>";
}
  

// Array com os dados dos jogadores
$jogadores = array(
  array(
    "numero" => 1,
    "nome" => "Tafarel",
    "cor" => "yellow"
  ),
  array(
    "numero" => 2,
    "nome" => "Jorginho",
    "cor" => "green"
  ),
  array(
    "numero" => 13,
    "nome" => "Aldair",
    "cor" => "yellow"
  ),
  array(
    "numero" => 15,
    "nome" => "Márcio Santos",
    "cor" => "green"
  ),
  array(
    "numero" => 6,
    "nome" => "Branco",
    "cor" => "yellow"
  ),
  array(
    "numero" => 5,
    "nome" => "Mauro Silva",
    "cor" => "green"
  ),
  array(
    "numero" => 8,
    "nome" => "Dunga",
    "cor" => "yellow"
  ),
  array(
    "numero" => 17,
    "nome" => "Mazinho",
    "cor" => "green"
  ),
  array(
    "numero" => 9,
    "nome" => "Zinho",
    "cor" => "yellow"
  ),
  array(
    "numero" => 11,
    "nome" => "Romario",
    "cor" => "green"
  ),
  array(
    "numero" => 7,
    "nome" => "Bebeto",
    "cor" => "yellow"
  ),
);

// Estilos personalizados
echo "<style>
      table {
        border-collapse: collapse;
        width: 40%;
        margin: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
      }
      table:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      }
      .numero-celula, .nome-celula {
        border-radius: 8px;
      }
      th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
      }
      th {
        background-color: #f2f2f2;
      }
      </style>";

echo "<table>";
echo "<tr><th>Número</th><th>Nome</th></tr>";
foreach ($jogadores as $jogador) {
  gerarLinha($jogador["numero"], $jogador["nome"], $jogador["cor"]);
}
echo "</table>";
?>
