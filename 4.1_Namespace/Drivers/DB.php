<?php
// App refers to the top-level namespace (i.e the namespace in index.php)
// Drivers is our namespace for DB.php inside the Drivers directory
namespace App\Drivers;

class DB
{
  static function isConnected()
  {
    return 'The database for chopper parts is here';
  }
}
