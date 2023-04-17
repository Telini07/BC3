<?php

$al = $gas = $die = 0;

do 
{
    $i = intval(fgets(STDIN));

    switch ($i) 
    {
        case 1:
            $al++;
            break;
        case 2:
            $gas++;
            break;
        case 3:
            $die++;
            break;
        case 4:
            break;
        default:
            continue;
    }
} while ($i != 4);


echo "MUITO OBRIGADO\n";
echo "Alcool: " . $al . "\n";
echo "Gasolina: " . $gas . "\n";
echo "Diesel: " . $die . "\n";

?>