<?php

$N = intval(trim(fgets(STDIN)));

$responsaveis = [
    1 => "Rolien",
    2 => "Naej",
    3 => "Elehcim",
    4 => "Odranoel"
];

for ($i = 0; $i < $N; $i++) {
    $K = intval(trim(fgets(STDIN)));

    for ($j = 0; $j < $K; $j++) {
        $feedback = intval(trim(fgets(STDIN)));
        echo $responsaveis[$feedback] . PHP_EOL;
    }
}

?>
