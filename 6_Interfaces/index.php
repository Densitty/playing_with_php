<?php

use App\Db;
use App\Drivers\MySql;

require_once('./autoloader.php');

$driver = new MySql();
$driver->connect(['user' => "something"]);
Db::make($driver);
