<?php 

echo '1: Converter para Celsius' . PHP_EOL;
echo '2: Converter para Fahrenheit' . PHP_EOL;

$y = trim(fgets(STDIN));
echo "Agora digite o valor: ";

$x = trim(fgets(STDIN));


if($y == 1){
    $celsius = 5 / 9 * ($x - 32);
    echo "{$celsius}°C";
}

if($y == 2){
    $fahrenheit = $x * 9 / 5 + 32;
    echo "{$fahrenheit}°F";

}