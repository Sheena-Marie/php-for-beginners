<?php

class Car {

  // objects added to the class.
  public $wheels = 4;
  // Public can be used anywhere.

  protected $bonnet = 1;
  // protected we can only use inside the class or subclasses

  private $engine = 1;
  // can only be used in THIS CLASS!! Can't be used in subclasses

  var $doors = 1;
  // Works like public.

  // Creating a Method.
  function showProperty(){
    echo $this->engine;
  }

}

$bmw = new Car();
$semi = new Semi();


class Semi extends Car{

}

echo $bmw -> showProperty();

?>
