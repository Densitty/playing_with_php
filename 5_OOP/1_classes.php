<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes</title>
</head>
<body>
  <?php
    class Helicopter {

      static $electricity = false;
      static $instance = null;

      function __construct() {
        echo "Instantiated <br/>";
      }

      static function make() {
        if (static::$instance === null) {
          static::$instance = new static();
        }

        return static::$instance;
      }

      static function topRotor() {
        echo "Check! Check!! Check!!!";
      }

      static function fuelType() {
        return static::$electricity; 
      }
    }

    // $helicopter = new Helicopter();
    var_dump(Helicopter::make());
    // $fuel_state = $helicopter::fuelType();
    // Helicopter::topRotor();
    // static::topRotor();
    // echo "<br/>";
    // var_dump($helicopter::$electricity);

    class Person {
      public $name;
      public $sex;

      function __construct($name, $sex) {
        $this -> name = $name;
        $this -> sex = $sex;
      }

      function disposition() {
        // if ($this -> name === "Kemi") {
        //   return "This is " . $this->name . ". She was greatly loved by Amstel Brough.";
        // }

        // return $this -> name . " just happens to be a regular girl to our hostel.";

        return $this -> name === "Kemi" ? "This is " . $this->name . ". She was greatly loved by Amstel Brough." : $this -> name . " just happens to be a regular girl to our hostel.";
      }

      
    }

    $girl_1 = new Person("Erica", "f");
    // $show = $girl_1 -> disposition();
    echo "<br/>";
    echo $girl_1 -> disposition();
  ?>
</body>
</html>