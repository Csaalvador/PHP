<?php 

$n = intval(fgets(STDIN));

for($i = 0; $i < $n; $i++){
    $input = trim(fgets((STDIN)));

    [$x, $y] = array_map('intval', explode(' ', $input));

    $rafael = ((3 * $x)**2) + $y**2;
    $beto = 2* ($x**2) + (5*$y)**2;
    $carlos = (-100*$x) + ($y**3);

    if($rafael > $beto && $rafael > $carlos){
        echo "Rafael ganhou" . PHP_EOL;
    }elseif($beto > $$rafael && $beto > $carlos){
        echo "Beto ganhou" . PHP_EOL;
    }else{
        echo "Carlos ganhou" . PHP_EOL;

    }
}