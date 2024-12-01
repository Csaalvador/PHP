
<?php 
defined('CONTROL') or die('Acesso negado');

$country = $_GET['country_name'] ?? null;

if (!$country) {
    echo '<p>Erro: Nenhum país foi selecionado.</p>';
    return;
}

$api = new apiConsumer();
$countryData = $api->getCountry($country);


// Exibe os dados do país
$name = $countryData[0]['name']['common'] ?? 'Nome não disponível';
$capital = $countryData[0]['capital'][0] ?? 'Capital não disponível';
?>

<div class="container mt-5">
    <div class="d-flex">
        <div class="card p-2 shadow">
            <img src="<?= $countryData[0]['flags']['png'] ?>" alt="">
        </div>
        <div class="ms-5 align-self-center">
    <p><?= $countryData[0]['name']['common'] ?></p>
    <p>Capital: <?= $countryData[0]['capital'][0] ?? 'Não informado' ?></p>
</div>
