<?php

namespace App\Drivers;

use App\ConfigAbstract;
use App\Contracts\DbContract;

class MongoDB extends ConfigAbstract
{
  public function connect()
  {
    $credentials = $this->getCredentials();
    var_dump("MongoDB Credentials", $credentials);
  }
}
