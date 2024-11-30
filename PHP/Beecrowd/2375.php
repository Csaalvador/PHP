<?php

$n = trim(fgets(STDIN));

$input = trim(fgets(STDIN));

[$a, $l, $p] = array_map('intval', explode(' ', $input));

if($n >= $a && $n >= $l && $n >= $p){
    echo "S" . PHP_EOL;
} else {
    echo "N" . PHP_EOL;
}