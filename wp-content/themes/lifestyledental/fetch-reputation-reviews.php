<?php
// Fetch Reputation.com widget data
$url = 'https://widgets.reputation.com/widgets/5e17284e55b9d8653de625f8/run?tk=4d0ccbfe161';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$response = curl_exec($ch);
curl_close($ch);
header('Content-Type: text/plain');
echo $response;
?>