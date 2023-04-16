<?php

$P = 0;

for ($i = 1; $i <= 6; $i++) {
  $valor = (float) readline($i);
  if ($valor > 0) {
    $P++;
  }
}

echo "$P valores positivos\n";

?>