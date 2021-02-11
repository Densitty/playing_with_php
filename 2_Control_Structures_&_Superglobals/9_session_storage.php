<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Store Data using Sessions</title>
</head>
<body>
  <?php 

    session_start();

    $random_num = rand(1, 10);
    if (empty($_SESSION["randomNumber"])) {
      $_SESSION["randomNumber"] = $random_num;      
    }

    if(isset($_POST["guess"])) {
      // generate a random number
      $my_guess = $_POST["my_number"];

      if ((int)$_SESSION["randomNumber"] === (int)($my_guess)) {
        echo "You guess well. "  . $_SESSION["randomNumber"] ;
        "<br/>";
      } else {
        echo "Please try again. Your guess is " . $my_guess . " while the number is " . $_SESSION["randomNumber"] ;
      }
    }
  ?>

  <form action="" method="POST">
    <label for="guess">Guess a number between 1 and 10.</label>
    <input type="number" name="my_number" id="guess">
    <button type="submit" name="guess">Guess</button>
  </form>
</body>
</html>