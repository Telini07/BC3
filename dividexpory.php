<?php

$N = readline();

for ($i = 0; $i < $N; $i++) 
{
    list($x, $y) = explode(' ', readline());

    if ($y == 0) 
    {
        echo "divisao impossivel\n";
    }else 
    {
        $div = $x / $y;
        echo number_format($div, 1, '.', '') . "\n";
    }
}

?>