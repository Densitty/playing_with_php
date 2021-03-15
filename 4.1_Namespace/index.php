<?php

namespace App;
// call or use the namespace created
use App\Drivers\DB;
// we need to call the location of the namespace in line 5 we are using 
require('./Drivers/DB.php');

// create a class
class Helicopter
{
  function topRotor()
  {
    echo DB::isConnected();
  }
}

Helicopter::topRotor()
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