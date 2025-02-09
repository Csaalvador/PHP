<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $total = count($arr);
    $positivos = 0;
    $negativos = 0;
    $zero = 0;

    foreach($arr as $num){
        if($num > 0){
            $positivos++;
        } elseif($num < 0){
            $negativos++;
        }else {
            $zero++;
        }
    }

    $propPositivos = $positivos / $total;
    $propNegativos = $negativos / $total;
    $propZeros = $zero / $total;
    
    // Passo 5: Imprimir resultados formatados
    printf("%.6f\n", $propPositivos);
    printf("%.6f\n", $propNegativos);
    printf("%.6f\n", $propZeros);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
