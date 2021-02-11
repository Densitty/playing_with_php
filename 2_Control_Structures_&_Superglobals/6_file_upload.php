<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
  <?php
    if(isset($_POST['upload'])) {
      echo 'File uploaded';
      echo '<br/>';
      var_dump($_FILES);
      echo '<br/>';
      print_r($_FILES["file"]);
    }
  ?>

<body>
  <div class="form">
    <form action="" method="post" enctype='multipart/form-data'>
      <input type="file" name="file" id="file">
      <button type="submit" name="upload" >Submit File</button>
    </form>
  </div>
</body>
</html>