<?php

$api = '50f0821448810c13f752c3a974686f';
$url = 'https://train-empire.com/api/getCompanyEngines.php?auth=' . $api;

// On effectue l'appel cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
// On désactive la verification de la présence du https
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = curl_exec($ch);

// On récupère un tableau des data obtenues par l'API
$json = json_decode($data);

echo "<pre>"; print_r($json); echo "</pre>";
curl_close($ch);