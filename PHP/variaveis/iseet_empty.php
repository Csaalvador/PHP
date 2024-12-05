<?php


// Desafio: Complete o código abaixo para verificar qual mensagem será exibida
$valor1 = '';
$valor2 = "aaa";
$valor3 = 42;

if (isset($valor1)) {
    echo "valor1 está definido e não é null\n";
} else {
    echo "valor1 não está definido ou é null\n";
}

if (empty($valor2)) {
    echo "valor2 está vazio\n";
} else {
    echo "valor2 não está vazio\n";
}

if (isset($valor3) && !empty($valor3)) {
    echo "valor3 está definido e não está vazio\n";
}
