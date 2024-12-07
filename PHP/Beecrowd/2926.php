<?php
// Lê o índice de felicidade (I) da entrada
$I = intval(trim(fgets(STDIN)));

// Verifica se o valor de I está dentro do intervalo permitido
if ($I > 1 && $I <= 10000) {
    // Constrói a frase com a repetição de 'a' baseada no índice de felicidade
    $inicio = "Ent" . str_repeat("a", $I) . "o eh N";
    $meio = str_repeat("a", $I);
    $fim = "ta" . str_repeat("a", $I) . "l!";
    
    $resultado = $inicio . $meio . $fim;

    echo $resultado . PHP_EOL;
}
?>
