<?php

while (true) 
{
    list($x, $y) = explode(' ', fgets(STDIN));

    if ($x == 0 || $y == 0) break;

    if ($x > 0 && $y > 0) echo "primeiro\n";
    elseif ($x < 0 && $y > 0) echo "segundo\n";
    elseif ($x < 0 && $y < 0) echo "terceiro\n";
    else echo "quarto\n";
}

?>