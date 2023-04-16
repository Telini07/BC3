<?php

while (true) 
{
    list($x, $y) = explode(' ', fgets(STDIN));
    $x = intval($x);
    $y = intval($y);

    if ($x == $y) {
        break;
    }
    
    if ($x < $y) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }
}

?>