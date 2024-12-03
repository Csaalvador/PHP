<?php

// Incluir os arquivos necessários
require_once __DIR__ . '/../../../apiCore/config.php';
require_once __DIR__ . '/../../../apiCore/response.php';

// Incluir os dados
$data = require_once __DIR__ . '/../../../apiCore/data.php';

// Inicializa um array para armazenar as profissões
$professions = [];

// Percorre os dados para extrair a profissão de cada item
foreach ($data as $profe) {
    if (isset($profe['profession'])) {
        $professions[] = $profe['profession']; // Adiciona a profissão ao array
    }
}

// Retorna a resposta JSON com as profissões
echo Response::json(200, 'success', $professions);
