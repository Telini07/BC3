<?php
$i = 1;
$j = 7;

while ($i <= 9) {
    echo "I=$i J=$j\n";

    if ($j == 5) 
    {
        $j = 7;
        $i += 2;
    } else {
        $j--;
    }
}
?>