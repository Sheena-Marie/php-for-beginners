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

class Plane extends Car {
  var $wheels = 2;
}

$jet = new Plane();
// $jet -> MoveWheels();
echo $jet -> wheels;

if(class_exists("Plane")) {
  echo "It's there";
} else {
  echo "Something went wrong";
}

?>
