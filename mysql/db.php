<?php

// To be able to connect to the database via PHP.
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if(!$connection) {
  die('Database connection failed!');
}

?>
