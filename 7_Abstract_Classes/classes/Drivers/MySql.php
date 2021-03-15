<?php

namespace App\Drivers;

use App\ConfigAbstract;
use App\Contracts\DbContract;

class MySql extends ConfigAbstract
{
  public function connect()
  {
    $credentials = $this->getCredentials();
    var_dump("MYSQL Credentials", $credentials);
  }
}
