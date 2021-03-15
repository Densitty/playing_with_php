<?php

namespace App;
// call or use the namespace created
use App\Drivers\DB;
// instead of calling the location of the app using the namespace in line 5 in line 7 below, let's ommit it
// require('./Drivers/DB.php');

// create a class
class Helicopter
{
  static function topRotor()
  {
    echo DB::isConnected();
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Namespace Explained More</title>
</head>

<body>

</body>

</html>