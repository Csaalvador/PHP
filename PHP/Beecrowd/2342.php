<?php

$n = intval(trim(fgets(STDIN)));

$input = trim(fgets(STDIN));
[$p, $c, $q] = explode(' ', $input);

$p = intval($p);
$q = intval($q);

switch ($c) {
    case '+':
        $result = $p + $q;
        break;
    case '*':
        $result = $p * $q;
        break;
    default:
        $result = 0; 
}

if ($result > $n) {
    echo "OVERFLOW\n";
} else {
    echo "OK\n";
}
?>
