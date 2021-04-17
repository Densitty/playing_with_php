<?php
$dateTimeZone = new DateTimeZone("UTC");
// $dateTime = new DateTime("", $dateTimeZone);
$dateTime = new DateTime("@" . time(), $dateTimeZone);
var_dump($dateTime);
echo "\n";
echo $dateTime->date;
echo "\n";
echo $dateTime->format("Y-m-d H:i:s A");
