<?php

require './vendor/autoload.php';

use Carbon\Carbon;

/* Print your birthday in all 3 date and time tools already covered in this chapter.
  1. date() and time() used together
  2. DateTime PHP class
  3. Carbon */

$dateTimeZone = new DateTimeZone("GMT+1");
$birthday = Date("l, d-m-Y, H:i:s a", mktime(18, 26, 19, 6, 19, 1991));
// $my_day = Date("Y-m-d H:i:s A");
printf("John Doe was born on %s", $birthday);
echo "\n";

$jane_doe = new DateTime("1993-06-12 14:12:32", $dateTimeZone);
var_dump($jane_doe);
echo "\n";
echo ("Jane Doe was born on " . $jane_doe->format("Y/m/d"));
echo "\n";

$lisa = Carbon::create(1976, 10, 25, 13, 44, 19);
$lisa_birthday = $lisa->toDayDateTimeString();
printf("Lisa Aubrey was born on %s .", $lisa_birthday);
