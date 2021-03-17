<?php
/*
 * Build a driver backbone using Guzzle. Throughout this section we've learned
 * OOP (classes, inheritance, interfaces, traits, etc.) and you have the tools
 * do this challenge. You just need to put it all together.
 * 
 * So, what kind of driver should you build? A driver to get the current
 * temperature from DarkSky.net. (https://darksky.net/dev/docs)
 * 
 * Required:
 * 1. Create an account (free)
 * 2. Get your API key from your dashboard.
 * 3. Use this URL to grab the current Massachusetts weather:
 *  https://api.darksky.net/forecast/[API KEY HERE]/42.3601,-71.0589
 *  
 * The driver should use Guzzle to grab the JSON response, then parse
 * the response to return the weather. Choose any format you'd like
 * when returning the weather.
 */

require_once(__DIR__ . '/../vendor/autoload.php');

use GuzzleHttp\Client;

class DarkSky
{
  const BASE_URL = "https://api.darksky.net/forecast/";
  private static  $API_KEY = '0639f1706d8d7b8b6aaaeaec438c52b6';

  // public function __construct(string $apiKey)
  // {
  //   $this->apiKey = $apiKey;
  // }


  public function guzzle()
  {
    return new Client([
      "base_uri" => static::BASE_URL . static::$API_KEY . "/",
    ]);
  }

  public function getTemperature(string $coords): string
  {
    try {
      $response = $this->guzzle()->get($coords);
      $body = (string) $response->getBody();
      $result = json_decode($body);
      return 'The current temperature in New York is ' . $result->currently->temperature;
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

$darkSky = new DarkSky();
var_dump($darkSky->getTemperature("42.3601,-71.0589"));
