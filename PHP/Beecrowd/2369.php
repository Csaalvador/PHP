<?php


$N = intval(trim(fgets(STDIN)));

$total = 7;



if ($N > 10) {

    if ($N <= 30) {
        $total += ($N - 10) * 1;
    }
    else if ($N <= 100) {
        $total += (30 - 10) * 1;  
        $total += ($N - 30) * 2;  
    }
    
    else {
        $total += (30 - 10) * 1;  
        $total += (100 - 30) * 2;  
        $total += ($N - 100) * 3; 
    }
}

echo $total . PHP_EOL;

?>
