<?php

class Car {

  // objects added to the class.
  static $wheels = 4;
  var $bonnet = 1;


  // Creating a Method.
  function MoveWheels(){
    Car::$wheels = 10; //we refer to the object inside the class with $this.
  }


}

$bmw = new Car();

Car::MoveWheels();

echo Car::$wheels;


?>
