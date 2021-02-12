<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Input and Output</title>
</head>
<body>
  <?php
    file_put_contents('./text.log', "\n4. Header text replaced", FILE_APPEND); 
  ?>
</body>
</html>