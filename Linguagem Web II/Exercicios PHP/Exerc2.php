<?php

// Função para calcular o n-ésimo termo da sequência de Fibonacci
function fibonacci($n) {
  if ($n <= 2) {
    return 1;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

// Imprimindo os primeiros 10 termos da sequência
for ($i = 1; $i <= 10; $i++) {
  echo fibonacci($i) . " ";
}

?>
