<?php

use GuzzleHttp\Client;

require_once(__DIR__ . '/../vendor/autoload.php');

$guzzle = new Client([
  "base_uri" => "https://google.com",
]);

/**
 * or instead of using namespace as above, we can just do
 * $guzzle = new GuzzleHttp\Client();
 */

$response = $guzzle->get("/");
// "/" because we have already set the base uri
var_dump($response->getBody());
