<?php

echo 'Digite o tempo em segundos: ';

$tempo = (int)trim(fgets(STDIN));

if ($tempo <= 0) {
    echo "Digite um número maior que zero." . PHP_EOL;
    exit;
}

while($tempo > 0){
    $tempo --;
    sleep(1);
    echo $tempo . " ";
}