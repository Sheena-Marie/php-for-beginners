<?php

class Car {
  // Creating a Method.
  function MoveWheels(){
    echo "Wheels Move";
  }

}

// Testing to see if the method MoveWheels inside the Car class exists.
if(method_exists('Car', 'MoveWheels')) {
  echo "The Method Exists";
} else {
  echo "It doesn't";
}

?>
