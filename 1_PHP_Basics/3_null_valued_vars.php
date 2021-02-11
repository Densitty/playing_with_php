<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World</title>
</head>
<body>
  <?php 
    // we cannot uninitialize a variable in PHP
    $ini_no_val = null;
    echo $ini_no_val;
    // arrays - associative array or object
    $object = [
      'name' => 'John',
      'age' => 20
    ];

    echo $object['name']."<br/>";

    // array
    $myArr = ['apple', 'banana', 'mango', 'orange', 'paw-paw'];

    $apple_present = in_array('cheese', $myArr);
    if ($apple_present) {
      echo 'in_array() returns => ' . $apple_present;
    }

    $persons = [
      'first' => 'Kayode',
      'second' => 'Kelly',
      'third' => 'Kim'
    ];

    $keyPresent = array_key_exists(0, $myArr);
    echo $keyPresent . ' always present <br/>';

    $slicer = array_slice($myArr,1,3);
    print_r($slicer);
    echo '<br/>---------<br/>';
    
    // truthy or falsy values; 0/false'/''/[]
    $myName = 0;
    $empty = empty($myName);
    echo $empty;
    echo '<br/>---------<br/>';
    
    $found = empty($persons['fourth']);
    echo $found;
    echo '<br/>---------<br/>';
    
    $found_2 = isset($persons['fourth']);
    $found_3 = isset($myName);
    echo $found_3;
    echo '<br/>---------<br/>';
    echo var_dump($found_3);
    echo '<br/>---------<br/>';
    $falsey = false;
    echo var_dump(empty($falsey));
    echo '<br/>---------<br/>';
    $stringy = "I am a good boy.";
    // pushing items into our array
    $splitty[] = $stringy[0];
    $splitty[] = $stringy[2] . $stringy[3];
    $splitty[] = $stringy[5];
    $splitty[] = $stringy[7] . $stringy[8] . $stringy[9] . $stringy[10];
    $splitty[] = $stringy[12] . $stringy[13] . $stringy[14];
    print_r($splitty);


  ?>
</body>
</html>