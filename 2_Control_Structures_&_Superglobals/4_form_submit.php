<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Submit</title>
</head>

<?php
  echo '<br/><br/>';

  if(!empty(isset($_GET['newName']))) {
    echo 'Your new name is ' . $_GET['newName'];
  }

  if (isset($_POST['send']) && array_key_exists('myName', $_POST)) {
    $my_name = $_POST['myName'];
    echo 'Hi ' . $my_name . ', you are now logged in.';
    "<br />";
    print_r($_POST);
  }
?>

<body>

  <div class="head">
    <h1>Form Submit</h1>
  </div>

  <div class="form">
    <form  method="post">
      <div class="name">
        <label for="myName">Name</label>
        <input type="text" name="myName" id="myName" >
      </div>
      <div class="submit">
        <!-- name attr has to be set if we are to capture it in php -->
        <button name="send" type="submit">Send</button>
      </div>
    </form>
  </div>
  
</body>
</html>