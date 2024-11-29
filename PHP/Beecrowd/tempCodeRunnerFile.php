<?php 
while(true) {
    $input = trim(fgets(STDIN));
    [$N, $L, $Q] = array_map('floatval', explode(' ', $input));

    if ($N == 0 && $L == 0 && $Q == 0) {
        break;
    }

    $names = explode(' ', trim(fgets(STDIN)));
    $cuias = floor($L / $Q);
    $lastVolume = $L % $Q;

    $indice = ($cuias - 1) % $N;
    $ricoDoMate = $names[$indice];

    echo $rico_do_mate . " " . number_format($last_volume, 1) . PHP_EOL;

}