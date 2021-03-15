<?php

use App\Drivers\MongoDB;
use App\Drivers\MySql;

return [
  "db" => [
    MySql::class => [
      "user" => "mysql-user",
      "password" => "pass123",
      "host" => "localhost"
    ],
    MongoDB::class => [
      "user" => "mongodb-user",
      "password" => "pass123",
      "host" => "localhost"
    ],
  ]
];
