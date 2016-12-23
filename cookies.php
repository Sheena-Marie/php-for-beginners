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
    <title>Document</title>
  </head>
  <body>

  </body>
</html>
