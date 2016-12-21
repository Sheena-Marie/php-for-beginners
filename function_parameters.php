<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>

    <?php

    function greeting($message){
      echo $message;
    }

    greeting("Hello, Sheena");

    echo "<hr>";

    function calculate($number1, $number2){
      $sum = $number1 + $number2;
      echo "The answer is " . $sum . ", Sheena.";
    }

    calculate(12, 24);

    ?>

  </body>
</html>
