<?php

use GuzzleHttp\Client;

require_once 'vendor/autoload.php';
$response = file_get_contents("https://api.rinbang.com/api/core/config");
$client = new Client([
    'base_uri' => "https://api.rinbang.com",
]);
$response = $client->get( "/api/core/config");
print_r($response->getBody()->getContents());
