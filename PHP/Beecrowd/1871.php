<?php

while (true) {

    $input = trim(fgets(STDIN));
    [$x, $y] = array_map('intval', explode(' ', $input));

    if ($x == 0 && $y == 0) {
        break;
    }

    $soma = $x + $y;

    $resultadoSemZeros = str_replace('0', '', strval($soma));
    echo $resultadoSemZeros . PHP_EOL;
}
