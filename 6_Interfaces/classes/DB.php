<?php
// App refers to the top-level namespace (i.e the namespace in index.php)
// Drivers is our namespace for DB.php inside the Drivers directory
namespace App;

use App\Contracts\DbContract;

class DB
{

  public static $instance = null;

  public function __construct(DbContract $driver)
  {
    echo "Constructing the DB";
  }

  public static function make(DbContract $driver)
  {
    if (static::$instance === null) {
      static::$instance = new static($driver);
    }

    return static::$instance;
  }
}
