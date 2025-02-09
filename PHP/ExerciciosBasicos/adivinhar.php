<?php

// Gerar um número aleatório entre 1 e 100
$numeroSecreto = rand(1, 100);

// Mensagem inicial
echo "Bem-vindo ao jogo da adivinhação!" . PHP_EOL;
echo "Eu escolhi um número entre 1 e 100. Tente adivinhar." . PHP_EOL;

$tentativas = 0;

while (true) {
    // Solicitar entrada do usuário
    echo "Digite seu palpite: ";
    $palpite = trim(fgets(STDIN));

    // Verificar se o palpite é um número
    if (!is_numeric($palpite)) {
        echo "Por favor, insira um número válido." . PHP_EOL;
        continue;
    }

    $palpite = (int)$palpite;
    $tentativas++;

    // Comparar o palpite com o número secreto
    if ($palpite < $numeroSecreto) {
        echo "Muito baixo! Tente novamente." . PHP_EOL;
    } elseif ($palpite > $numeroSecreto) {
        echo "Muito alto! Tente novamente." . PHP_EOL;
    } else {
        echo "Parabéns! Você acertou o número em $tentativas tentativa(s)." . PHP_EOL;
        break;
    }
}
