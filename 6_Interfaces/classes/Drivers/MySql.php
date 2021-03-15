<?php

namespace App\Drivers;

use App\Contracts\DbContract;

class MySql implements DbContract
{
  public function connect(array $credentials)
  {
    var_dump("MYSQL Credentials", $credentials);
  }
}
