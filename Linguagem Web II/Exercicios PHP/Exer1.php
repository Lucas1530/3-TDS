
<?php

// Definindo os valores
$primeiroValor = 5;
$segundoValor = 4;

// a) O primeiro valor elevado ao segundo valor
$resultadoElevacao = pow($primeiroValor, $segundoValor);

// b) O primeiro valor vezes o segundo valor (utilizando apenas a operação de soma)
$resultadoMultiplicacao = 0;
for ($i = 0; $i < $segundoValor; $i++) {
  $resultadoMultiplicacao += $primeiroValor;
}

// c) O número inverso do primeiro valor
$resultadoInverso = 1 / $primeiroValor;

// d) A soma do segundo número com a metade do primeiro número
$resultadoSomaMetade = $segundoValor + ($primeiroValor / 2);

// e) A diferença do primeiro número com o segundo
$resultadoDiferenca = $primeiroValor - $segundoValor;

// Exibindo os resultados
echo "a) O primeiro valor elevado ao segundo valor: " . $resultadoElevacao . "<br>";
echo "b) O primeiro valor vezes o segundo valor (utilizando apenas a operação de soma): " . $resultadoMultiplicacao . "<br>";
echo "c) O número inverso do primeiro valor: " . $resultadoInverso . "<br>";
echo "d) A soma do segundo número com a metade do primeiro número: " . $resultadoSomaMetade . "<br>";
echo "e) A diferença do primeiro número com o segundo: " . $resultadoDiferenca . "<br>";

?>
