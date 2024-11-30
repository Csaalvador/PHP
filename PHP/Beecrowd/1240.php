<?php

$n = (int)trim(fgets(STDIN));

for($i = 0; $i < $n; $i++) {
    [$a, $b] = explode(' ', trim(fgets(STDIN)));
}

if(str_ends_with($a, $b)) {
    echo "encaixa". PHP_EOL;
} else {
    echo 'nao encaixa' . PHP_EOL;
}