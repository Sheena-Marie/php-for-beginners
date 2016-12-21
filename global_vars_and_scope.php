<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    $x = "Outside"; //global scope

    function convert(){

      global $x; //declare the global variable. Now we can change the value anywhere we want!
      $x = "inside"; //local scope
    }

    echo $x . "<hr>";

    convert();

    echo $x;



    ?>

  </body>
</html>
