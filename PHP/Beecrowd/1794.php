<?php 

$N = readline();

list($LA, $LB) = array_map('intval', explode(' ', fgets(STDIN)));

// Lê os limites da secadora
list($SA, $SB) = array_map('intval', explode(' ', fgets(STDIN)));

if ($N >= $LA && $N <= $LB && $N >= $SA && $N <= $SB) {
    echo "possivel\n";
} else {
    echo "impossivel\n";
}