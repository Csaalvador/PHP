<?php

$t = (int)trim(fgets(STDIN));

for ($i = 0; $i < $t; $i++) {
    $x = (int)trim(fgets(STDIN));
    $binarios = decbin($x);
    $qntd = substr_count($binarios, "1");

    echo $qntd . PHP_EOL;
}
?>
