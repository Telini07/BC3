
<?php

$n = intval(fgets(STDIN));

if ($n <= 2 || $n >= 1000) {
    exit();
}

for ($i = 1; $i <= 10; $i++) {
    $tabuada = $i * $n;
    echo "$i x $n = $tabuada\n";
}

?>