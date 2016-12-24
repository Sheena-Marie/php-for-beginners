<?php

class Car {
  // Creating a Method.
  function MoveWheels(){
    echo "Wheels Move";
  }

}

$bmw = new Car();
$buggatti = new Car();

$bmw -> MoveWheels();
echo "<br>";
$buggatti -> MoveWheels();

?>
