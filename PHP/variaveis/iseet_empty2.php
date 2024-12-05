<?php

// Simular dados do formulário
$_POST = [
    "nome" => "Cauã",
    "email" => "joao@email.com",
    "idade" => 25
];

// Validação
if (empty($_POST['nome'])) {
    echo "O campo nome está vazio\n";
} else {
    echo "Nome: " . $_POST['nome'] . PHP_EOL;
}

if (!isset($_POST['email'])) {
    echo "O campo email não foi enviado\n";
} else {
    echo "Email: " . $_POST['email'] . "\n";
}

if (isset($_POST['idade']) && $_POST['idade'] > 18) {
    echo "Idade válida para cadastro\n";
}
