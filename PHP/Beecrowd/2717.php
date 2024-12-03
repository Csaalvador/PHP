<?php

$n = (int)trim(fgets(STDIN));

list($x, $y) = array_map('intval', explode(' ', fgets(STDIN)));

if($x + $y <= $n){
    echo "Farei hoje!" . PHP_EOL;
}else {
    echo "Deixa para amanha!" . PHP_EOL;
}