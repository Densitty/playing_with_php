<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Control Structures in PHP</title>
</head>
<body>
  <?php
    $her_name = "Kemi Lasisi";
    $period = "Afternoon";
  
    if (strtolower($period) === strtolower("Morning")) {
      echo "Good ". $period . ' ' . $her_name;
    } else if (strtolower($period) === strtolower('Afternoon')) {
      echo "Good ". $period . ' ' . $her_name;
    } else {
      echo "Good evening and have a wonderful night" . $her_name;
    }
  ?>
</body>
</html>