<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Using foreach to Loop</title>
</head>
<body>
  <?php 
    $countries = [
      "Nairobi"   => "Kenya",
      "London"    => "UK",
      "Pretoria"  => "South Africa",
      "Ankara"    => "Turkey",
      "Beijing"   => "China"
    ];

    foreach ($countries as $key => $value) { 
      echo $key . " is the capital of " . $value . "<br/>";
    }
  ?>
</body>
</html>