<?php

$i = (int)trim(fgets(STDIN));

for($i = 1; $i < $t; $i++){
    $input = explode(' ', trim(fgets(STDIN)));
    $n = (int)$input[0];
    
    $idades = array_slice($input, 1);

    $capitao = $idades[$n / 2];

    echo "Case $i: $capitao\n";
}