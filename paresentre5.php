<?php

$pares = 0;

for ($i = 1; $i <= 5; $i++) {
  $valor = (int) readline("Digite o valor $i: ");
  if ($valor % 2 == 0) {
    $pares++;
  }
}

echo "$pares valores pares.\n";

?>