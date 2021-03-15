<?php

namespace App\Contracts;

interface DbContract
{
  public function connect(array $credentials);
}
