<?php
// dates
// date_default_timezone_set("Europe/London");
echo date_default_timezone_get() . "\n";
$format = "l";
$format_2 = "Y/m/d h:i:s A";
echo date($format_2, time());
