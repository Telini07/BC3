<?php
$n = intval(fgets(STDIN));

if ($n <= 0) 
{
    exit();
}

for ($i = 0; $i < $n; $i++) 
{
    $valores = explode(" ", fgets(STDIN));
    $n1 = floatval($valores[0]);
    $n2 = floatval($valores[1]);
    $n3 = floatval($valores[2]);

    $media = ($n1 * 2 + $n2 * 3 + $n3 * 5) / 10;
    echo number_format($media, 1, '.', '') . "\n";
}

?>