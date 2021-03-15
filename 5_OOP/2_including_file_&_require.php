<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Import or Require Files</title>
</head>
<body>
  <?php
    require('./2_a_import_file.php');
    echo "Import me <br/>";
    echo "My name is " . $name . ", a " . $profession . " and I am " . $age . " years old";
  ?>
</body>
</html>