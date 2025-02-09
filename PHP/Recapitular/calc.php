<?php

echo " " . PHP_EOL;
echo "1: Multiplicação" . PHP_EOL;
echo "2: Adição" . PHP_EOL;
echo "3: Subtração" . PHP_EOL;
echo "4: Divisão" . PHP_EOL;
echo " " . PHP_EOL;

$x = (int)trim(fgets(STDIN));
echo "---------------------------------------------------" . PHP_EOL;

[$y, $z] = array_map('intval', explode(' ', trim(fgets(STDIN))));

switch($x){
    case 1:
        $result = $y * $z;
        break;

    case 2:
        $result = $y + $z;
        break;

    case 3:
        $result = $y - $z;
        break;

    case 4:
        $result = $y / $z;
    }

echo $result . PHP_EOL;
echo " " . PHP_EOL;