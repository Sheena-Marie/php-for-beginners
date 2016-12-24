<?php

class Car {

  // objects added to the class.
  var $wheels = 4;
  var $bonnet = 1;
  var $engine = 1;
  var $doors = 1;

  // Creating a Method.
  function __construct(){
    //Constructors are used when we want to do some pre stuff, ie validating users, before getting into the actual things that we want to do.
    echo $this->wheels = 10;
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
$semi = new Car();


?>
