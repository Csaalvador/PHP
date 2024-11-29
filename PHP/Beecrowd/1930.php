<?php 

$input = trim(fgets(STDIN));

[$t1, $t2, $t3, $t4] = array_map('intval', explode(' ', $input));

$aparelhos = ($t1 + $t2 + $t3 + $t4) - 3;

echo $aparelhos .PHP_EOL;