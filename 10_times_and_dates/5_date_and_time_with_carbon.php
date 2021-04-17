<?php

require './vendor/autoload.php';

use Carbon\Carbon;
// use Carbon\CarbonImmutable;

// printf("Now: %s", Carbon::now());

/* $immutable = CarbonImmutable::now();
echo ($immutable);
echo '\n'; */


$now = Carbon::now();
$now->add(1, 'day');
var_dump($now->format("Y-m-d"));
echo ($now->toFormattedDateString());
echo "\n";
echo $now->toTimeString();
echo "\n";
echo $now->toDateTimeString();  // 1975-12-25 14:15:16
echo "\n";
echo $now->toDayDateTimeString(); // Thu, Dec 25, 1975 2:15 PM
