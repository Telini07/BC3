<?php

do 
{
    $n1 = readline();
    if ($n1 < 0 || $n1 > 10) {

        echo "nota invalida\n";
    }
} while ($n1 < 0 || $n1 > 10);

do 
{
    $n2 = readline();
    if ($n2 < 0 || $n2 > 10) 
    {
        echo "nota invalida\n";
    }
} while ($n2 < 0 || $n2 > 10);

$media = ($n1 + $n2) / 2;
echo "media = ". number_format($media, 2) . "\n";

?>