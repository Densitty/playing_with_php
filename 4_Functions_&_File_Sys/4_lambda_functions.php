<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lambda - Anonymous - Functions</title>
</head>
<body>
  <?php
    $intro = function($name, $age) {
      return "Hello world, my name is " . $name . " and I am " . $age . " years old.";
    };

    $res = $intro("John Doe", 20);
    echo $res;
  ?>
</body>
</html>