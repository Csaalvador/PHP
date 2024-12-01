<?php 
defined('CONTROL') or die('Acesso negado');

// Captura o nome do país da URL
$country = $_GET['country_name'] ?? null;

// Verifica se o país foi selecionado
if (!$country) {
    echo '<p>Erro: Nenhum país foi selecionado.</p>';
    return;
}

// Inicializa a API e faz a requisição
$api = new apiConsumer();
$countryData = $api->getCountry($country);

// Exibe os dados do país
$name = $countryData[0]['name']['common'] ?? 'Nome não disponível';
$capital = $countryData[0]['capital'][0] ?? 'Capital não disponível';
$flag = $countryData[0]['flags']['png'] ?? '';

?>

<div class="container mt-5">
    <div class="d-flex">
        <div class="card p-2 shadow">
            <!-- Exibe a bandeira do país -->
            <?php if ($flag): ?>
                <img src="<?= htmlspecialchars($flag, ENT_QUOTES, 'UTF-8') ?>" alt="Bandeira de <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>" class="img-fluid">
            <?php else: ?>
                <p>Bandeira não disponível</p>
            <?php endif; ?>
        </div>
        <div class="ms-5 align-self-center">
            <!-- Exibe o nome do país e a capital -->
            <p class="display-3"><strong><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></strong></p>
            <p class="p-0 m-0">Capital: <?= htmlspecialchars($capital, ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </div>

    <!-- Exibe a região abaixo da imagem -->
    <div class="row mt-3">
        <div class="col">
        <p>Região: <strong><?= $countryData[0]['region'] ?></strong></p>
        <p>Sub-região: <strong><?= $countryData[0]['subregion'] ?></strong></p>
        <p>População: <strong><?= $countryData[0]['population'] ?></strong></p>
        <p>Area: <strong><?= $countryData[0]['area'] ?></strong> km <sup>2</sup></p>

                
    </div>
</div>

<div>
    <a href="?route=home" class="btn btn-primary px-5">Voltar</a>
</div>