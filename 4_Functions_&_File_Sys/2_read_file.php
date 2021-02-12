<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read File</title>
</head>
<body>
  <?php
    // the content of the file is output as a single-line string
    $my_file = file_get_contents('./text.log');
    // echo $my_file;
    // same function as above but each line is placed in array
    $my_file2 = file('./text.log');
    // var_dump($my_file);
    foreach ($my_file2 as $file) {
      // echo "-------------<br/>";
      echo "<br/>-------------<br/>";
      echo $file;
    }
  ?>
</body>
</html>