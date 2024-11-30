<?php 
defined('CONTROL') or die('Acesso negado');

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://restcountries.com/v3.1/all",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Accept: */*",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>API COM PHP PURO</h3>
        </div>
    </div>
</div>