<?php
  if(isset($_POST['submit'])) {


    $username = $_POST['username'];
    $password = $_POST['password'];

    $names = array('Sheena', 'Edwin', 'Peter', 'Samid', 'Mohad', 'Maria', 'Jane', 'Tom');

    $minimum = 5;
    $maximum = 10;

  /*  Teacher's Code:
    if (strlen($username) < $minimum) {
      echo "Username has to be longer than 5 characters";
    }

    if (strlen($username) > $maximum) {
      echo "Username must be less than 10 characters";
    }

    if (!in_array($username, $names)) {
      echo "Sorry, you're not allowed to log in";
    } else {
      echo "Welcome!" . $username;
    }
    */


    // My code turning the mulitple if statements into an if, elseif, else thing:
    if(strlen($username) < $minimum) {
      echo "Username has to be longer than 5 characters";
    } elseif (strlen($username) > $maximum) {
      echo "Username has to be 10 characters or less";
    } elseif (!in_array($username, $names)) {
      echo "Sorry, that Username was not found";
    } else {
      echo "Welcome, " . $username;
    }

  }



?>
