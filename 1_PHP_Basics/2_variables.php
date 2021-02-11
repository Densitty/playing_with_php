<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
</head>
<body>
  <?php 
    $my_var = 3;
    $new_var = $my_var;
    echo 'My var is '.$my_var."<br>";
    echo 'My new var is '.$new_var."<br>";
    $my_var = 5;
    echo 'After $my_var variable is changed, it\'s new value is now '.$my_var."<br>";
    /*
    $new_var is pointing to the value of $my_var and not its location
    */
    echo 'My new var is still '. $new_var.'<br>';
    // to make $new_var point to $my_var location
    $new_var = &$my_var; // attach memory address of $my_var to $new_var
    echo '$new_var will now be (after we write:- $new_var = &$my_var ) '. $new_var;
    echo "<br/>";
    $long_doc = <<<'EOD'
      lorem ipsum epsum mosum losum insum qsum mensum apsum kelum sensum
      Eplein mein caldje grifgh jeinth
    EOD;
    echo "<br/>";
    echo $long_doc;
    
  ?>
</body>
</html>