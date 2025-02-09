<?php

echo 'Escolha a operação: ' . PHP_EOL;
echo '1: Adição' . PHP_EOL;
echo '2: subtração' . PHP_EOL;
echo '3: multiplicação' . PHP_EOL;
echo '4: divisão' . PHP_EOL;

$x = (int)trim(fgets(STDIN));
echo 'Escolha dois numeros: ' ;
[$y, $z] = array_map('intval', explode(' ', trim(fgets(STDIN))));

switch($x){
    case 1:
        $y + $z;
        $result = $y + $z;
        break;

        case 2:
            $y - $z;
            $result = $y - $z;
            break;

            case 3:
                $y * $z;
                $result = $y * $z;
                break;

                case 4:
                    $y / $z;
                    $result = $y / $z;
                    break;
}

echo $result . PHP_EOL;