<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>For Loops in PHP</title>
</head>
<body>
  <?php

    $friends = ["Fred", "Rudolf", "Loveth", "Feifei", "Lisa", "Yiwen"];
    $table_1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    $count = count($friends);
    for ($i = 0; $i < $count; $i++) {
      echo $friends[$i] . "<br/>";
    }

    echo "---------------------------------<br/>";
    
    for ($i = 0; $i < count($table_1); $i++) {
      for ($j = 0; $j < count($table_1); $j++) {
        echo "$table_1[$i]  x  $table_1[$j]   = " . $table_1[$i]* $table_1[$j] . "<br/>";
      }
      echo "---------------------------------<br/>";
    }

    $girls = ["Marie", "Leroy", "Kemi", "Kate", "Presca", "Dongue"];

    for ($i = 0; $i < count($girls); $i++) {
      if($girls[$i] !== "Kemi") {
        echo $girls[$i] . "<br/>";
        continue;
      }
    }
  ?>
</body>
</html>