<?php

use GuzzleHttp\Client;

$dark_sky_key = '0639f1706d8d7b8b6aaaeaec438c52b6';
require_once(__DIR__ . '/../vendor/autoload.php');
$guzzle = new Client();

$response = $guzzle->get("https://api.darksky.net/forecast/" . $dark_sky_key . "/42.3601,-71.0589");
echo (string) $response->getBody();
