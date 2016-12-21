<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    function addNumbers($num1, $num2){
      $sum = $num1 + $num2;

      return $sum;
    }

    $result = addNumbers(20, 20);

    echo $result . "<hr>";

    $result = addNumbers(100, $result);

    echo $result . "<hr>";

    $result = addNumbers(200, $result);

    echo $result;



    ?>

  </body>
</html>
