<?php

$name = 'MyFirstCookie';
$value = 100;
$expiration = time() + (60*60*24*7);

setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies</title>
  </head>
  <body>

    <?php
    if(isset($_COOKIE['MyFirstCookie'])){
      $someOne = $_COOKIE['MyFirstCookie'];
      echo $someOne;
    } else {
      $someOne = "Cookie not working";
    }
    ?>

  </body>
</html>
