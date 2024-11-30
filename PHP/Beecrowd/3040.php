<?php

$n = (int)trim(fgets(STDIN));

for($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    [$h, $d, $g] = array_map('intval', explode(' ', $input));

    if($h >= 200 && $h <= 300) {
        if($d > 50){
            if($g >= 150){
                echo 'Sim'. PHP_EOL;
            }else{
                echo 'Nao'. PHP_EOL;
            }
        }else{
            echo 'Nao'. PHP_EOL;
    }
}else{
    echo 'Nao'. PHP_EOL;
}
}