<?php

$cha = (int) trim(fgets(STDIN)); 
$input = trim(fgets(STDIN)); 

$numeros = array_map('intval', explode(' ', $input));

$reposta = 0;

foreach ($numeros as $numero) {
    if ($numero == $cha) {
        $reposta++;
    }
}

echo $reposta . PHP_EOL;
