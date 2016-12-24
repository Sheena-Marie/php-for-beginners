<?php

class Car {

  // objects added to the class.
  var $wheels = 4;
  var $bonnet = 1;
  var $engine = 1;
  var $doors = 1;

  // Creating a Method.
  function MoveWheels(){
    $this->wheels = 10; //we refer to the object inside the class with $this.
  }

  function CreateDoors(){
    $this -> doors = 6;
  }

  function ColourCar(){
    $this -> colour = "red";
  }

}

$bmw = new Car();
$truck = new Car();
// $bmw -> MoveWheels();
// // $bmw-> wheels = 8; //change the value of wheels.
echo $bmw -> wheels . "<hr>";

$truck -> CreateDoors();
echo $truck -> wheels = 10 . "<br>";
echo $truck -> doors;

$truck -> ColourCar();
echo $truck -> colour;


?>
