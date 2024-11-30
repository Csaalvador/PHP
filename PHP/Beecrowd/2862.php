<?php

$n = trim(fgets(STDIN));

for($i = 0; $i < $n; $i++){
    $x = trim(fgets(STDIN));

    if($x <= 8000){
        echo "inseto!" . PHP_EOL;
    }else{
        echo "Mais de 8000!" . PHP_EOL;
    }

}