<?php
$N = readline();

for ($i = 1; $i <= $N; $i++) 
{
    $a = $i;
    $b = pow($i, 2);
    $c = pow($i, 3);

    echo "$a $b $c\n";

    $a = $i;
    $b = pow($i, 2) + 1;
    $c = pow($i, 3) + 1;
    
    echo "$a $b $c\n";
}
?>