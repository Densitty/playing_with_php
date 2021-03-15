<?php

namespace App\Drivers;

use App\Contracts\DbContract;

class MongoDB implements DbContract
{
  public function connect(array $credentials)
  {
    var_dump("MongoDB Credentials", $credentials);
  }
}
