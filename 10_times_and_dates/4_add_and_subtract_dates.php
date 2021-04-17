<?php
$dateTimeZone = new DateTimeZone("GMT");
$dateTime = new DateTime("", $dateTimeZone);
var_dump($dateTime->format("Y-m-d H:i:s"));
echo "\n";

$interval = new DateInterval("P4DT6H8M");
$dateTime->add($interval);
var_dump($dateTime->format("Y-m-d H:i:s"));
