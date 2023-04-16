<?php

$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {

    list($x, $y) = explode(' ', fgets(STDIN));
    $x = intval($x);
    $y = intval($y);

    $r = 0;

    for ($j = $x; $j <= $y; $j++) 
    {
        if ($j % 2 != 0) 
        {
            $r += $j;
        }
    }

    echo $r . "\n";
}

?>