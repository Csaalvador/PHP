<?php

$q = intval(fgets(STDIN));

$opinions = explode(" ", fgets(STDIN));

$satisfatorios = 0;
$insatisfatorios = 0;

foreach ($opinions as $opinion) {
    if ($opinion == 0) {
        $satisfatorios++;
    } else {
        $insatisfatorios++;
    }
}

if ($satisfatorios < $insatisfatorios || $satisfatorios == $insatisfatorios) {
    echo "N\n";
} else {
    echo "Y\n";
}
?>
