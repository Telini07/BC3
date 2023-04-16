<?php
$i = 1;
$j = 7;

while ($i <= 9) 
{
    for ($k = 0; $k < 3; $k++) 
    {
        echo "I=$i J=$j\n";
        $j--;
    }
    $i += 2;
    $j += 5;
}
?>