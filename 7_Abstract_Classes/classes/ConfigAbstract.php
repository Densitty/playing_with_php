<?php

namespace App;

use App\Contracts\DbContract;

abstract class ConfigAbstract implements DbContract
{
  abstract public function connect();

  public function getCredentials()
  {
    $realdir = realpath(__DIR__ . '/../config/config.php');
    $config = require_once($realdir);
    return $config['db'][static::class];
  }
}
