<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Number Guessing Game</title>
</head>
  <body>
  <?php 

    // using the $_POST superglobal
    if(isset($_POST["guess"])) {
      // generate a random number
      $rand_num = rand(1, 10);
      $my_guess = $_POST["my_number"];

      if ($rand_num === (int)($my_guess)) {
        echo "You guess well.";
        "<br/>";
      } else {
        echo "Please try again. Your guess is " . $my_guess . " while the number is " . $rand_num ;
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