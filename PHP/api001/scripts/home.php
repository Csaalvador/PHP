<?php 
defined('CONTROL') or die('Acesso negado');

$api = new apiConsumer();
$countries = $api->getAllCountries();

// Verifica se há dados
if (empty($countries)) {
    echo '<p>Não foi possível carregar os países. Verifique a API.</p>';
    return;
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Países do mundo</h3>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <p>Lista de países</p>
            <select id="selectCountry" class="form-select">
                <option value="">Selecione um país</option>
                <?php foreach ($countries as $country) : ?>
                    <option value="<?= htmlspecialchars($country, ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($country, ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectCountry = document.querySelector("#selectCountry");

        if (!selectCountry) {
            console.error("Elemento selectCountry não encontrado!");
            return;
        }

        selectCountry.addEventListener('change', () => {
            const country = selectCountry.value;
            if (country) {
                window.location.href = `?route=country&country_name=${country}`;
            }
        });
    });
</script>
